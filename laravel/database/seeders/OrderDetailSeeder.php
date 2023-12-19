<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use \App\Models\Order_detail;


class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $now = Carbon::now();

        $orderDetails = [
            [
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'size' => 1,
                'color' => 'M',
                'description' => 'White',
            ],
            [
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
                'size' => 1,
                'color' => 'XL',
                'description' => 'Red',
            ],
            [
                'order_id' => 2,
                'product_id' => 3,
                'quantity' => 1,
                'size' => 1,
                'color' => 'L',
                'description' => 'White',
            ],
            [
                'order_id' => 2,
                'product_id' => 4,
                'quantity' => 1,
                'size' => 1,
                'color' => 'M',
                'description' => 'White',
            ],
            [
                'order_id' => 2,
                'product_id' => 5,
                'quantity' => 1,
                'size' => 1,
                'color' => 'S',
                'description' => 'Red',
            ],
        ];

        Order_detail::insert($orderDetails);
    }
}
