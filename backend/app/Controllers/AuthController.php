<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function signup()
    {
        helper(['form']);
        echo view('components/cards/signup_content');
    }

    public function signupFunc()
    {
        helper(['form']);
        $session = session();
        $usersModel = new UsersModel();

        // Set validation rules
        $rules = [
            'first_name' => 'required|min_length[2]',
            'last_name'  => 'required|min_length[2]',
            'email'      => 'required|valid_email|is_unique[USERS_TABLE.email]',
            'password'   => [
                'rules' => 'required|min_length[8]|regex_match[/^(?=.*[A-Z])(?=.*[!@#\$%\^&\*])/]',
                'errors' => [
                    'regex_match' => 'Password must contain at least one uppercase letter and one special character.'
                ]
            ],
            'confirm_password' => 'matches[password]'
        ];

        if (!$this->validate($rules)) {
            // Validation failed
            $data['validation'] = $this->validator;
            echo view('components/cards/signup_content', $data);
        } else {
            // Validation passed, insert user
            $userData = [
                'first_name' => $this->request->getPost('first_name'),
                'middle_name' => $this->request->getPost('middle_name'),
                'last_name' => $this->request->getPost('last_name'),
                'email' => $this->request->getPost('email'),
                'password_hash' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'gender' => $this->request->getPost('gender')
            ];

            $usersModel->insert($userData);
            $session->setFlashdata('success', 'Account created successfully!');
            return redirect()->to('/login');
        }
    }

    public function login()
    {
        helper(['form']);
        echo view('components/cards/login_content');
    }

    public function loginFunc()
    {
        $session = session();
        $model = new UsersModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();

        if ($data) {
            $pass = $data['password_hash'];
            if (password_verify($password, $pass)) {
                $sessionData = [
                    'id' => $data['id'],
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'isLoggedIn' => true,
                ];
                $session->set($sessionData);
                return redirect()->to('/account');
            } else {
                $session->setFlashdata('error', 'Incorrect password.');
                return redirect()->back();
            }
        } else {
            $session->setFlashdata('error', 'Email not found.');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
