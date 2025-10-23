<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    // Optional field remapping (useful if you want to alias names later)
    protected $datamap = [];

    // The fields that should be automatically converted to DateTime objects
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    // Define how certain fields should be automatically type-cast
    protected $casts = [
        'id'              => 'integer',
        'account_status'  => 'integer',
        'email_activated' => 'integer',
    ];

    /**
     * Helper method to get the full name of the user.
     */
    public function getFullName(): string
    {
        return trim("{$this->first_name} {$this->middle_name} {$this->last_name}");
    }

    /**
     * Setter for password to ensure it's hashed before being stored.
     */
    public function setPassword(string $password): self
    {
        $this->attributes['password_hash'] = password_hash($password, PASSWORD_DEFAULT);
        return $this;
    }
}
