<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'USERS_TABLE';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password_hash',
        'type',
        'account_status',
        'email_activated',
        'gender',
        'profile_image',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps = true;
    protected $returnType = 'array';
}
