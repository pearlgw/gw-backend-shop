<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Product 1', 'description' => 'Description 1', 'price' => 100.00, 'categories_id' => 1, 'tags' => 'tag1,tag2'],
            ['name' => 'Product 2', 'description' => 'Description 2', 'price' => 200.00, 'categories_id' => 2, 'tags' => 'tag3,tag4'],
            ['name' => 'Product 3', 'description' => 'Description 3', 'price' => 300.00, 'categories_id' => 3, 'tags' => 'tag5,tag6'],
            ['name' => 'Product 4', 'description' => 'Description 4', 'price' => 400.00, 'categories_id' => 4, 'tags' => 'tag7,tag8'],
            ['name' => 'Product 5', 'description' => 'Description 5', 'price' => 500.00, 'categories_id' => 5, 'tags' => 'tag9,tag10'],
            ['name' => 'Product 6', 'description' => 'Description 6', 'price' => 600.00, 'categories_id' => 6, 'tags' => 'tag11,tag12'],
            ['name' => 'Product 7', 'description' => 'Description 7', 'price' => 700.00, 'categories_id' => 1, 'tags' => 'tag13,tag14'],
            ['name' => 'Product 8', 'description' => 'Description 8', 'price' => 800.00, 'categories_id' => 2, 'tags' => 'tag15,tag16'],
            ['name' => 'Product 9', 'description' => 'Description 9', 'price' => 900.00, 'categories_id' => 3, 'tags' => 'tag17,tag18'],
            ['name' => 'Product 10', 'description' => 'Description 10', 'price' => 1000.00, 'categories_id' => 4, 'tags' => 'tag19,tag20'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
