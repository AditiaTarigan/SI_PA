<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'role' => 'admin',
                'email' => 'admin@gmail.com',
                'username' => 'admin1@gmail.com',
                'password' => bcrypt('password2024'),
            ],
            [
                'name' => 'Mahasiswa',
                'role' => 'mahasiswa',
                'email' => 'mahasiswa@gmail.com',
                'username' => 'if324001',
                'password' => bcrypt('oktova'),
            ],
            [
                'name' => 'Dosen',
                'role' => 'dosen',
                'email' => 'dosen@gmail.com',
                'username' => 'dosen@gmail.com',
                'password' => bcrypt('dosen123'),
            ]
        ];

        foreach ($userData as $key => $value){
            User::create($value);
        }

    }
}
