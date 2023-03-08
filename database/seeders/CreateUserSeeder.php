<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
          ['name' => 'User',
            'email' => 'user@mail.com',
              'password' => bcrypt("password"),
              'role' => 0
          ],
            ['name' => 'Editor',
                'email' => 'editor@mail.com',
                'password' => bcrypt("password"),
                'role' => 1
            ],
            ['name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt("password"),
                'role' => 2
            ]
        ];

        foreach ($users as $user){
            User::create($user);
        }
    }
}
