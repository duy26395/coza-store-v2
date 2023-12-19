<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Products;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $products = [
            [
                'product_company' => 'MC Company',
                'product_name' => 'Esprit Ruffle Shirt',
                'description' => 'Esprit Long Sleeve Jabot Ruffle Shirt Womens Size L Gray Mandarin Collar Blouse',
                'price' => 500000,
                'quantity' => 10,
                'product_img' => 'product-01.jpg',
                'category_id' => 1,
            ],
            [
                'product_company' => 'CHEL Store',
                'product_name' => 'Herschel supply',
                'description' => 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.',
                'price' => 400000,
                'quantity' => 5,
                'product_img' => 'product-02.jpg',
                'category_id' => 2,
            ],
            [
                'product_company' => 'OnlyTrouser',
                'product_name' => 'Front Pocket Jumper',
                'description' => 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.',
                'price' => 200000,
                'quantity' => 43,
                'product_img' => 'product-03.jpg',
                'category_id' => 2,
            ],
            [
                'product_company' => 'OnlyTrouser',
                'product_name' => 'Pretty Little Thing',
                'description' => 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.',
                'price' => 250000,
                'quantity' => 5,
                'product_img' => 'product-04.jpg',
                'category_id' => 3,
            ],
            [
                'product_company' => 'MC Company',
                'product_name' => 'Esprit Ruffle Shirt',
                'description' => 'Esprit Long Sleeve Jabot Ruffle Shirt Womens Size L Gray Mandarin Collar Blouse',
                'price' => 500000,
                'quantity' => 10,
                'product_img' => 'product-01.jpg',
                'category_id' => 2,
            ],
            [
                'product_company' => 'CHEL Store',
                'product_name' => 'Herschel supply',
                'description' => 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.',
                'price' => 450000,
                'quantity' => 14,
                'product_img' => 'product-02.jpg',
                'category_id' => 2,
            ],
        ];

        foreach ($products as $value) {
            Products::create($value);
        }
    }
}
