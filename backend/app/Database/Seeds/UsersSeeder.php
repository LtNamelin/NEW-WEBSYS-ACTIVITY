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

        $dataYouWannaInsert = [
            [
                'first_name' => 'data_2',
                'middle_name' => 'data_3',
                'last_name' => 'data_4',
                'email' => 'data_5',
                'password_hash' => $password,
                'type' => 'data_7',
                'account_status' => 'data_7',
                'email_activated' => 'data_8',
                'gender' => 'data_9',
                'profile_image' => 'data_10',
                'deleted_at' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ];

        $this->db->table('USERS_TABLE')->insertBatch($dataYouWannaInsert);
    }
}
