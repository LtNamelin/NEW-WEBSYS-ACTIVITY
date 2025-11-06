<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];

    // Optional: auto-hash password if you assign $user->password
    protected function setPassword(string $password)
    {
        $this->attributes['password_hash'] = password_hash($password, PASSWORD_DEFAULT);
    }

    // Helper: combine full name
    public function getFullName()
    {
        return trim("{$this->first_name} {$this->middle_name} {$this->last_name}");
    }
}
