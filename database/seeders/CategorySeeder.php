<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'ESC Volunteers',
        ]);
        Category::create([
            'name' => 'АКТИВНОСТ ECO-ACTION',
        ]);
        Category::create([
            'name' => 'ЛЕТЕН КАМП',
        ]);
    }
}
