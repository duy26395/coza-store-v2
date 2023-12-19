<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use \App\Models\Category;



class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        //
        $categories = [
            [
                'name' => 'Women',
                'parent_id' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Men',
                'parent_id' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Bag',
                'parent_id' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Watches',
                'parent_id' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Shoes',
                'parent_id' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'children',
                'parent_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'oldman',
                'parent_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'matureman',
                'parent_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        Category::insert($categories);
    }
}
