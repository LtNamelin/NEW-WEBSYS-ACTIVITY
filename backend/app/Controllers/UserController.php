<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    protected $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
        helper(['form', 'url']);
    }

    public function create()
    {
        // Handle POST request from the sign-up form
        if ($this->request->getMethod() === 'post') {
            $data = [
                'first_name'      => $this->request->getPost('first_name'),
                'middle_name'     => $this->request->getPost('middle_name'),
                'last_name'       => $this->request->getPost('last_name'),
                'email'           => $this->request->getPost('email'),
                'password_hash'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'type'            => 'client',
                'account_status'  => 1,
                'email_activated' => 0,
                'gender'          => $this->request->getPost('gender'),
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s'),
            ];

            // Validate basic input
            if (empty($data['first_name']) || empty($data['email']) || empty($this->request->getPost('password'))) {
                return $this->response->setJSON([
                    'status'  => 'error',
                    'message' => 'Please fill out all required fields.'
                ]);
            }

            // Check if email already exists
            $existing = $this->usersModel->where('email', $data['email'])->first();
            if ($existing) {
                return $this->response->setJSON([
                    'status'  => 'error',
                    'message' => 'Email already exists.'
                ]);
            }

            // Save user
            $this->usersModel->insert($data);

            return $this->response->setJSON([
                'status'  => 'success',
                'message' => 'Account created successfully!'
            ]);
        }

        // Otherwise show a 404 if accessed directly
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
}
