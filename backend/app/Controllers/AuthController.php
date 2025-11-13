<?php

namespace App\Controllers;

use App\Models\UsersModel;

class AuthController extends BaseController
{
    /**
     * Show the signup page
     */
    public function signup()
    {
        $session = session();
        $data = [
            'errors'  => $session->getFlashdata('errors') ?? [],
            'old'     => $session->getFlashdata('old') ?? [],
            'success' => $session->getFlashdata('success') ?? '',
        ];

        echo view('user/signup', $data);
    }

    /**
     * Handle signup submission
     */
    public function signupFunc()
    {
        $session = session();
        $model = new UsersModel();

        $postData = [
            'first_name'  => trim($this->request->getPost('first_name')),
            'middle_name' => trim($this->request->getPost('middle_name')),
            'last_name'   => trim($this->request->getPost('last_name')),
            'gender'      => trim($this->request->getPost('gender')),
            'email'       => trim($this->request->getPost('email')),
            'password'    => $this->request->getPost('password'),
        ];

        $errors = [];

        // Basic validation
        if (!$postData['first_name']) $errors['first_name'] = 'First name is required';
        if (!$postData['last_name'])  $errors['last_name']  = 'Last name is required';
        if (!$postData['gender'])     $errors['gender']     = 'Gender is required';
        if (!$postData['email'])      $errors['email']      = 'Email is required';
        if (!$postData['password'])   $errors['password']   = 'Password is required';

        // Check if email already exists
        if ($postData['email'] && $model->where('email', $postData['email'])->first()) {
            $errors['email'] = 'Email already registered';
        }

        if (!empty($errors)) {
            $session->setFlashdata('errors', $errors);
            $session->setFlashdata('old', $postData);
            return redirect()->to('./signup');
        }

        // Hash password before saving
        $dataToInsert = [
            'first_name'      => $postData['first_name'],
            'middle_name'     => $postData['middle_name'] ?: null,
            'last_name'       => $postData['last_name'],
            'gender'          => $postData['gender'],
            'email'           => $postData['email'],
            'password_hash'   => password_hash($postData['password'], PASSWORD_DEFAULT),
            'type'            => 'client',
            'account_status'  => 1,
            'email_activated' => 0,
        ];

        if ($model->insert($dataToInsert)) {
            $session->setFlashdata('success', 'Account created successfully! You can now log in.');
        } else {
            $session->setFlashdata('errors', ['general' => 'Failed to create account. Please try again.']);
        }

        return redirect()->to('./signup');
    }

    /**
     * Show login page
     */
    public function login()
    {
        $session = session();
        $data = [
            'errors' => $session->getFlashdata('errors') ?? [],
            'old'    => $session->getFlashdata('old') ?? [],
        ];

        echo view('user/login', $data);
    }

    /**
     * Handle login submission
     */
    public function loginFunc()
    {
        $session = session();
        $model = new UsersModel();

        $email = trim($this->request->getPost('email'));
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();

        // Check credentials
        if (!$user || !password_verify($password, $user['password_hash'])) {
            $session->setFlashdata('errors', ['general' => 'Invalid email or password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->to('./login');
        }

        // Create session data
        $sessionData = [
            'id'         => $user['id'],
            'first_name' => $user['first_name'],
            'last_name'  => $user['last_name'],
            'email'      => $user['email'],
            'type'       => $user['type'] ?? 'client',
            'isLoggedIn' => true,
        ];

        $session->set('user', $sessionData);

        // Redirect based on user type
        if ($user['type'] === 'admin') {
            return redirect()->to('./admindash');
        } else {
            return redirect()->to('./'); // or './' if your landing page is home
        }
    }

    /**
     * Handle logout
     */
    public function logout()
    {
        $session = session();
        $session->destroy();

        // Remove session cookie for complete cleanup
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 3600, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);

        return redirect()->to('/');
    }
}
