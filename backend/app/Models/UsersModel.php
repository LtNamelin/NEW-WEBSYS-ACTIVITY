<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'USERS_TABLE';
    protected $primaryKey = 'id';
    protected $returnType = 'array'; // can also use your User entity if needed
    protected $allowedFields = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'gender'
    ];
}
