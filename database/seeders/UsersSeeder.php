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
        // User::create([
        //     'name' => 'tes',
        //     'email' => 'tes@gmail.com',
        //     'password' => bcrypt('password'),
        // ]);
        User::create([
            'name' => 'postsAdmin',
            'email' => 'adminposts@gmail.com',
            'password' => bcrypt('spancaposts'),
            'role' => 'postsAdmin'
        ]);

        User::create([
            'name' => 'socialAdmin',
            'email' => 'adminsocial@gmail.com',
            'password' => bcrypt('socialenamlima'),
            'role' => 'socialAdmin'
        ]);
        User::create([
            'name' => 'superAdmin',
            'email' => 'adminsuper@gmail.com',
            'password' => bcrypt('superwiratmaja'),
            'role' => 'superAdmin'
        ]);
    }
}
