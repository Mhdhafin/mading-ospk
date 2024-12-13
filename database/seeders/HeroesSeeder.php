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

            'title' => 'Osis Smkn 65 Jakarta',
            'subtitle' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam vero ea neque in ducimus saepe harum veritatis illum nihil vitae.'
        ]);
    }
}
