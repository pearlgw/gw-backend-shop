<?php

namespace Database\Seeders;

use App\Models\ProductGallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = [
            ['products_id' => 1, 'url' => 'https://example.com/image1.jpg'],
            ['products_id' => 2, 'url' => 'https://example.com/image2.jpg'],
            ['products_id' => 3, 'url' => 'https://example.com/image3.jpg'],
            ['products_id' => 4, 'url' => 'https://example.com/image4.jpg'],
            ['products_id' => 5, 'url' => 'https://example.com/image5.jpg'],
            ['products_id' => 6, 'url' => 'https://example.com/image6.jpg'],
            ['products_id' => 7, 'url' => 'https://example.com/image7.jpg'],
            ['products_id' => 8, 'url' => 'https://example.com/image8.jpg'],
            ['products_id' => 9, 'url' => 'https://example.com/image9.jpg'],
            ['products_id' => 10, 'url' => 'https://example.com/image10.jpg'],
            ['products_id' => 1, 'url' => 'https://example.com/image11.jpg'],
            ['products_id' => 2, 'url' => 'https://example.com/image12.jpg'],
            ['products_id' => 3, 'url' => 'https://example.com/image13.jpg'],
            ['products_id' => 4, 'url' => 'https://example.com/image14.jpg'],
            ['products_id' => 5, 'url' => 'https://example.com/image15.jpg'],
            ['products_id' => 6, 'url' => 'https://example.com/image16.jpg'],
            ['products_id' => 7, 'url' => 'https://example.com/image17.jpg'],
            ['products_id' => 8, 'url' => 'https://example.com/image18.jpg'],
            ['products_id' => 9, 'url' => 'https://example.com/image19.jpg'],
            ['products_id' => 10, 'url' => 'https://example.com/image20.jpg'],
        ];

        foreach ($galleries as $gallery) {
            ProductGallery::create($gallery);
        }
    }
}
