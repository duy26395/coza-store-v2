<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use \App\Models\Img_product_detail;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        $data = [
            [
                'product_id' => 1,
                'name' => 'product-08.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 1,
                'name' => 'product-detail-02.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 1,
                'name' => 'product-05.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 2,
                'name' => 'product-15.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 2,
                'name' => 'product-16.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 2,
                'name' => 'product-11.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        Img_product_detail::insert($data);

    }
}
