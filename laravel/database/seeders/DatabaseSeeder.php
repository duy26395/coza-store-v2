<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;
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
        \App\Models\Staff::create([
            'user_id' => '1',
            'status' => Staff::STATUS_ENABLED,
            'email' => 'staff_01@example.com',
            'password' => Hash::make('Staff#Pass=0101'),
        ]);
    }
}
