<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        // if you want password that is hashed
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        $USERS_TABLE = [
            [
                'first_name' => 'data_1',
                'middle_name' => 'data_2',
                'last_name' => 'data_3',
                'email' => 'data_4',
                'password_hash' => $password,
                'type' => 'data_5',
                'account_status' => 'data_6',
                'email_activated' => 'data_7',
                'gender' => 'data_8',
                'profile_image' => 'data_9',
                'deleted_at' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ];

        $this->db->table('USERS_TABLE')->insertBatch($USERS_TABLE);
    }
}
