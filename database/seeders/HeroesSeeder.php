<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::create([

            'hero_image' => 'https://images.unsplash.com/photo-1511485977113-f34c92461ad9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
            'title' => 'Osis Smkn 65 Jakarta',
            'subtitle' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam vero ea neque in ducimus saepe harum veritatis illum nihil vitae.'
        ]);
    }
}
