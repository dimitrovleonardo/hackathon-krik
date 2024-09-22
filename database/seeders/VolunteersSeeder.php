<?php

namespace Database\Seeders;

use App\Models\Volunteer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\File;

class VolunteersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $volunteers = [
            '1' => [
                'name' => "Idil Abes",
                'age' => '20',
                'country' => "Turkeye",
                'description' => "Hello! I'm Idil. I am 20. I am studying in the department of law in Turkey, Istanbul. This is my first experience in a project like this one, so I am pretty excited about working and spending time with other volunteers. I love team projects and doing something together. Also, I liked Macedonia and Skopje. This city has great nature and statues. I wonder how we will work and spend amazing time with others when I meet new people from other cultures.",
                'image' => "/images/Volunteers/1-Idil-Abes.png",
                "term" => "long"
            ],
            '2' => [
                'name' => "Melih Furkan Orta",
                'age' => '22',
                'country' => "Turkeye",
                'description' => "Hello! I'm Melih. I am 22. I am studying in the department of law in Turkey, Istanbul. This is my first experience in a project like this one, so I am pretty excited about working and spending time with other volunteers. I love team projects and doing something together. Also, I liked Macedonia and Skopje. This city has great nature and statues. I wonder how we will work and spend amazing time with others when I meet new people from other cultures.",
                'image' => "/images/Volunteers/2-Melih-Furkan-Orta.png",
                "term" => "long"
            ],
            '3' => [
                'name' => "Bedirhan Sevim",
                'age' => '22',
                'country' => "Turkeye",
                'description' => "Hello! I'm Bedirhan. I am 22. I am studying in the department of law in Turkey, Istanbul. This is my first experience in a project like this one, so I am pretty excited about working and spending time with other volunteers. I love team projects and doing something together. Also, I liked Macedonia and Skopje. This city has great nature and statues. I wonder how we will work and spend amazing time with others when I meet new people from other cultures.",
                'image' => "/images/Volunteers/3.Bedirhan-Sevim.png",
                "term" => "long"
            ],
            '4' => [
                'name' => "Zeynep Cebeci",
                'age' => '20',
                'country' => "Turkeye",
                'description' => "Hello! I'm Zeynep. I am 20. I am studying in the department of law in Turkey, Istanbul. This is my first experience in a project like this one, so I am pretty excited about working and spending time with other volunteers. I love team projects and doing something together. Also, I liked Macedonia and Skopje. This city has great nature and statues. I wonder how we will work and spend amazing time with others when I meet new people from other cultures.",
                'image' => "/images/Volunteers/4-Zeynep-Cebeci.png",
                "term" => "long"
            ],
            '5' => [
                'name' => "Merve Ozkan",
                'age' => '18',
                'country' => "Turkeye",
                'description' => "Hello! I'm Merve. I am 18. I am studying in the department of law in Turkey, Istanbul. This is my first experience in a project like this one, so I am pretty excited about working and spending time with other volunteers. I love team projects and doing something together. Also, I liked Macedonia and Skopje. This city has great nature and statues. I wonder how we will work and spend amazing time with others when I meet new people from other cultures.",
                'image' => "/images/Volunteers/5.Merve-Ozkan.png",
                "term" => "long"
            ],
            '6' => [
                'name' => "Melek Cakan",
                'age' => '20',
                'country' => "Turkeye",
                'description' => "Hello! I'm Melek. I am 20. I am studying in the department of law in Turkey, Istanbul. This is my first experience in a project like this one, so I am pretty excited about working and spending time with other volunteers. I love team projects and doing something together. Also, I liked Macedonia and Skopje. This city has great nature and statues. I wonder how we will work and spend amazing time with others when I meet new people from other cultures.",
                'image' => "/images/Volunteers/6-Melek Cakan.png",
                "term" => "long"
            ],
            '7' => [
                'name' => "Melisa Pektaş",
                'age' => '23',
                'country' => "Turkeye",
                'description' => "Hello! I'm Melisa. I am 23. I am studying in the department of law in Turkey, Istanbul. This is my first experience in a project like this one, so I am pretty excited about working and spending time with other volunteers. I love team projects and doing something together. Also, I liked Macedonia and Skopje. This city has great nature and statues. I wonder how we will work and spend amazing time with others when I meet new people from other cultures.",
                'image' => "/images/Volunteers/7-Melisa-Pektaş.png",
                "term" => "long"
            ],
            '8' => [
                'name' => "Manon Lacoste",
                'age' => '21',
                'country' => "France",
                'description' => "Hello! I'm Manon. I am 21. I am studying in the department of law in France, Paris. This is my first experience in a project like this one, so I am pretty excited about working and spending time with other volunteers. I love team projects and doing something together. Also, I liked Macedonia and Skopje. This city has great nature and statues. I wonder how we will work and spend amazing time with others when I meet new people from other cultures.",
                'image' => "/images/Volunteers/8-Manon Lacoste.png",
                "term" => "long"
            ],
            '9' => [
                'name' => "Lisa Simone",
                'age' => '24',
                'country' => "Turkeye",
                'description' => "Hello! I'm Lisa. I am 24. I am studying in the department of law in Turkey, Istanbul. This is my first experience in a project like this one, so I am pretty excited about working and spending time with other volunteers. I love team projects and doing something together. Also, I liked Macedonia and Skopje. This city has great nature and statues. I wonder how we will work and spend amazing time with others when I meet new people from other cultures.",
                'image' => "/images/Volunteers/9-Lisa Simone.png",
                "term" => "long"
            ],
            '10' => [
                'name' => "Kaan Alğın",
                'age' => '23',
                'country' => "Turkeye",
                'description' => "Hello! I'm Kaan. I am 23. I am studying in the department of law in Turkey, Istanbul. This is my first experience in a project like this one, so I am pretty excited about working and spending time with other volunteers. I love team projects and doing something together. Also, I liked Macedonia and Skopje. This city has great nature and statues. I wonder how we will work and spend amazing time with others when I meet new people from other cultures.",
                'image' => "/images/Volunteers/10-Kaan-Alğın.png",
                "term" => "long"
            ],
            '11' => [
                'name' => "Metehan Cam",
                'age' => '23',
                'country' => "Turkeye",
                'description' => "Hello! I'm Metehan. I am 23. I am studying in the department of law in Turkey, Istanbul. This is my first experience in a project like this one, so I am pretty excited about working and spending time with other volunteers. I love team projects and doing something together. Also, I liked Macedonia and Skopje. This city has great nature and statues. I wonder how we will work and spend amazing time with others when I meet new people from other cultures.",
                'image' => "/images/Volunteers/11-Metehan-Cam.png",
                "term" => "long"
            ],
            '12' => [
                'name' => "Ali Karabay",
                'age' => '29',
                'country' => "Turkeye",
                'description' => "Hello! I'm Ali. I am 29. I am studying in the department of law in Turkey, Istanbul. This is my first experience in a project like this one, so I am pretty excited about working and spending time with other volunteers. I love team projects and doing something together. Also, I liked Macedonia and Skopje. This city has great nature and statues. I wonder how we will work and spend amazing time with others when I meet new people from other cultures.",
                'image' => "/images/Volunteers/12-Ali-Karabay.png",
                "term" => "long"
            ],

        ];

        foreach ($volunteers as $key => $item) {
            $imageFile = $item['image'];
            $imagePath = public_path($imageFile);

            if (file_exists($imagePath)) {
                try {
                    $path = Storage::disk('public')->putFileAs(
                        'images',
                        new File($imagePath),
                        basename($imageFile)
                    );

                    Volunteer::create([
                        'name' => $item['name'],
                        'age' => $item['age'],
                        'country' => $item['country'],
                        'description' => $item['description'],
                        'image' => $path,
                        'term' => $item['term']
                    ]);
                } catch (\Exception $e) {

                    Log::error('Error storing file:' . $e->getMessage());
                }
            } else {
                $totalSaved = Volunteer::count();
                Log::warning('Image not found' . $totalSaved);
            }
        };
    }
}
