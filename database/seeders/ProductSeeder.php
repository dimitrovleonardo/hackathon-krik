<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Прстен',
            'description' => 'Одржување изработка.',
            'price' => 300,
            'image1' => 'images/E-shop/2-1.jpg',
            'image2' => 'images/E-shop/2-1.jpg',
            'image3' => 'images/E-shop/2-1.jpg',
            'image4' => 'images/E-shop/2-1.jpg',
        ]);

        Product::create([
            'name' => 'Нараквица',
            'description' => 'Автентична изработка.',
            'price' => 350,
            'image1' => 'images/E-shop/2-2.jpg',
            'image2' => 'images/E-shop/2-2.jpg',
            'image3' => 'images/E-shop/2-2.jpg',
            'image4' => 'images/E-shop/2-2.jpg',
        ]);
        Product::create([
            'name' => 'Прстен',
            'description' => 'Автентична изработка.',
            'price' => 300,
            'image1' => 'images/E-shop/2-3.jpg',
            'image2' => 'images/E-shop/2-3.jpg',
            'image3' => 'images/E-shop/2-3.jpg',
            'image4' => 'images/E-shop/2-3.jpg',
        ]);
        Product::create([
            'name' => 'Комплет обетки и прстен',
            'description' => 'Автентична изработка.',
            'price' => 500,
            'image1' => 'images/E-shop/2-4.jpg',
            'image2' => 'images/E-shop/2-4.jpg',
            'image3' => 'images/E-shop/2-4.jpg',
            'image4' => 'images/E-shop/2-4.jpg',
        ]);

        Product::create([
            'name' => 'Единечна Обетка',
            'description' => 'Автентична изработка.',
            'price' => 200,
            'image1' => 'images/E-shop/2-5.jpg',
            'image2' => 'images/E-shop/2-5.jpg',
            'image3' => 'images/E-shop/2-5.jpg',
            'image4' => 'images/E-shop/2-5.jpg',
        ]);
        Product::create([
            'name' => 'Комплет Обетка И Прстен',
            'description' => 'Автентична изработка.',
            'price' => 500,
            'image1' => 'images/E-shop/2-6.jpg',
            'image2' => 'images/E-shop/3-2.jpg',
            'image3' => 'images/E-shop/3-3.jpg',
            'image4' => 'images/E-shop/3-4.jpg',
        ]);
    }
}
