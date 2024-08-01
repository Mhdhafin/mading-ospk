<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User
        User::create([
            'image' => '',
            'name' => 'user123',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123')
        ]);

        // Admin
        User::create([
            'image' => '',
            'name' => 'admin123',
            'username' => 'admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);
    }
}