<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use \App\Models\Orders;


class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $now = Carbon::now();
        $orders = [
            [
                'user_id' => 1,
                'total_cost' => 1463000,
                'status' => 'Wait',
                'address' => 'HUE-HUE-HA NOI',
                'phone_number' => '0914200244',
                'email' => 'duyakaa@gmail.com',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'total_cost' => 1463000,
                'status' => 'Wait',
                'address' => '1635743043',
                'phone_number' => '0914200244',
                'email' => 'duyakaa@gmail.com',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 1,
                'total_cost' => 1463000,
                'status' => 'Wait',
                'address' => 'HUE-HUE-HA NOI',
                'phone_number' => '0898432695',
                'email' => 'duyakaa@gmail.com',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        Orders::insert($orders);
    }
}
