<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;


class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => fake()->name(),
                'email' => 'admin@example.com',
                'password' => Hash::make('Admin#Pass=01'),
                'phone_number' => fake()->phoneNumber(),
                'type' => User::TYPE_ADMIN,
            ],
            [
                'name' => fake()->name(),
                'email' => 'member@example.com',
                'password' => Hash::make('Member#Pass=01'),
                'phone_number' => fake()->phoneNumber(),
                'type' => User::TYPE_MEMBER,
            ],
            [
                'name' => fake()->name(),
                'email' => 'guest01@example.com',
                'password' => Hash::make('Guest#Pass=01'),
                'phone_number' => fake()->phoneNumber(),
                'type' => User::TYPE_GUEST,
            ]
        ];
        foreach ($data as $value) {
            User::create($value);
        }
    }
}
