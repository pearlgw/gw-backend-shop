<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Category 1'],
            ['name' => 'Category 2'],
            ['name' => 'Category 3'],
            ['name' => 'Category 4'],
            ['name' => 'Category 5'],
            ['name' => 'Category 6'],
        ];

        foreach ($categories as $category) {
            ProductCategory::create($category);
        }
    }
}
