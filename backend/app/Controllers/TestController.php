<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;

class TestController extends Controller
{
    public function index()
    {
        $userModel = new UsersModel();
        $users = $userModel->findAll();

        echo "<h2>Users Table Data</h2>";
        echo "<pre>";
        print_r($users);
        echo "</pre>";
    }
}
