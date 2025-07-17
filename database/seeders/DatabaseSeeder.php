<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Database\Factories\BookFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $books = [
            [
                'title' => 'Sample Book 1',
                'author' => 'Sample Author 1',
                'description' => 'This is a sample book description 1.',
                'published_date' => now(),
                'cover_image_url' => 'https://ia800505.us.archive.org/view_archive.php?archive=/35/items/l_covers_0014/l_covers_0014_61.zip&file=0014617370-L.jpg',
            ],
            [
                'title' => 'Crazy Rich Asians',
                'author' => 'Sample Author 2',
                'description' => 'This is a sample book description 2.',
                'published_date' => now(),
                'cover_image_url' => 'https://images2.penguinrandomhouse.com/cover/9780345803788',
            ],
            // Add more books as needed
        ];

        foreach ($books as $bookData) {
            Book::create($bookData);
        }
    }
}
