<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productCategories = [
            [
                'name' => 'Women’s Nike Shoes',
                'slug' => 'womens-nike-shoes',
                'preview_image_path' => '/images/shoes.jpg'
            ],
            [
                'name' => 'Leather Jackets',
                'slug' => 'leather-jackets',
                'preview_image_path' => '/images/jacket.jpg'
            ],
            [
                'name' => 'Headphones',
                'slug' => 'headphones',
                'preview_image_path' => '/images/headphones.jpg'
            ],
            [
                'name' => 'Boots',
                'slug' => 'boots',
                'preview_image_path' => '/images/boots.jpg'
            ],
            [
                'name' => 'Cool Shades',
                'slug' => 'cool-shades',
                'preview_image_path' => '/images/shades.jpg'
            ],
            [
                'name' => 'Phones',
                'slug' => 'phones',
                'preview_image_path' => '/images/phones.jpg'
            ],
        ];

        collect($productCategories)->each(fn ($category) => ProductCategory::query()->create($category));
    }
}
