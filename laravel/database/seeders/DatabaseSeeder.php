<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\HttpFoundation\AcceptHeader;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BannerSeeder::class,
            CategorySeeder::class,
            ProductImageSeeder::class,
            AccountSeeder::class,
            OrdersSeeder::class,
            OrderDetailSeeder::class,
            ProductSeeder::class,
            SliderSeeder::class
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
