<?php

namespace App\Controllers;

use App\Models\UsersModel;

class AuthController extends BaseController
{
    public function signup()
    {
        // Display the signup page
        $session = session();
        $data['errors'] = $session->getFlashdata('errors') ?? [];
        $data['old']    = $session->getFlashdata('old') ?? [];
        $data['success'] = $session->getFlashdata('success') ?? '';

        echo view('user/signup', $data); // this should point to your signup view file
    }

    public function signupFunc()
    {
        $session = session();
        $model = new UsersModel();

        // Get POST data
        $postData = [
            'first_name'  => $this->request->getPost('first_name'),
            'middle_name' => $this->request->getPost('middle_name'),
            'last_name'   => $this->request->getPost('last_name'),
            'gender'      => $this->request->getPost('gender'),
            'email'       => $this->request->getPost('email'),
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
            // Save errors and old input to flashdata
            $session->setFlashdata('errors', $errors);
            $session->setFlashdata('old', $postData);
            return redirect()->to('/signup');
        }

        // Hash password before saving
        $postData['password'] = password_hash($postData['password'], PASSWORD_DEFAULT);

        // Insert into database
        $model->insert($postData);

        // Redirect with success message
        $session->setFlashdata('success', 'Account created successfully!');
        return redirect()->to('/signup');
    }

    public function login()
    {
        $session = session();
        $data['errors'] = $session->getFlashdata('errors') ?? [];
        $data['old']    = $session->getFlashdata('old') ?? [];

        echo view('user/login', $data);
    }

    public function loginFunc()
    {
        $session = session();
        $model = new UsersModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();
        if (!$user || !password_verify($password, $user['password'])) {
            $session->setFlashdata('errors', ['general' => 'Invalid email or password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->to('/login');
        }

        $session->set('user', $user);
        return redirect()->to('/'); // redirect to home after login
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
