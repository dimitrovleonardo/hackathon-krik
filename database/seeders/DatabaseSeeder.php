<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
            TeamSeeder::class,
        ]);

        // Call the ProductSeeder to seed the products table
        $this->call(ProductSeeder::class);
    }
}
