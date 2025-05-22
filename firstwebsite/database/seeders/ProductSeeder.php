<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Smartphone X',
                'description' => 'Latest smartphone with advanced features and high-resolution camera.',
                'price' => 699.99,
                'image' => 'products/smartphone.jpg',
                'stock' => 50,
                'is_featured' => true
            ],
            [
                'name' => 'Laptop Pro',
                'description' => 'Powerful laptop for professionals with high-performance processor.',
                'price' => 1299.99,
                'image' => 'products/laptop.jpg',
                'stock' => 30,
                'is_featured' => true
            ],
            [
                'name' => 'Wireless Headphones',
                'description' => 'Premium wireless headphones with noise cancellation.',
                'price' => 199.99,
                'image' => 'products/headphones.jpg',
                'stock' => 100,
                'is_featured' => false
            ],
            [
                'name' => 'Smart Watch',
                'description' => 'Feature-rich smartwatch with health monitoring capabilities.',
                'price' => 249.99,
                'image' => 'products/smartwatch.jpg',
                'stock' => 75,
                'is_featured' => true
            ],
            [
                'name' => 'Bluetooth Speaker',
                'description' => 'Portable Bluetooth speaker with amazing sound quality.',
                'price' => 89.99,
                'image' => 'products/speaker.jpg',
                'stock' => 60,
                'is_featured' => false
            ],
            [
                'name' => 'Gaming Console',
                'description' => 'Next-gen gaming console with 4K gaming capabilities.',
                'price' => 499.99,
                'image' => 'products/console.jpg',
                'stock' => 25,
                'is_featured' => true
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
