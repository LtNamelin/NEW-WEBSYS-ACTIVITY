<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    protected $datamap = [];

    // Automatically manage date fields
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    // Cast certain fields to integer
    protected $casts = [
        'id'              => 'integer',
        'account_status'  => 'integer',
        'email_activated' => 'integer',
    ];

    /**
     * Optional mutator for password hashing
     * Usage: $user->password_hash = 'plainPassword';
     */
    protected function setPasswordHash(string $password)
    {
        $this->attributes['password_hash'] = password_hash($password, PASSWORD_DEFAULT);
        return $this;
    }
}
