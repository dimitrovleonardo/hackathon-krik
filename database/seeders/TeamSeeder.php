<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'name' => 'Игор Димовски',
            'role' => 'Координатор за волонтери во ЦМА - Крик',
            'image' => 'images/ourTeam/igor-dimovski.jpg',
            'linkedin' => '#',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        Team::create([
            'name' => 'Матео Тренкоски',
            'role' => 'Практикант во ЦМА Крик',
            'image' => 'images/ourTeam/mateo-trenkoski.jpg',
            'linkedin' => '#',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        Team::create([
            'name' => 'Сара Димоска',
            'role' => 'Координатор во ЦМА Крик',
            'image' => 'images/ourTeam/sara-dimoska.jpg',
            'linkedin' => '#',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    }
}
