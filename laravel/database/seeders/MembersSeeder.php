<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Members;


class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'full_name' => 'Nguyen Duy',
            'email' => 'duy26395@gmail.com',
            'phone_number' => '0909090909',
            'password' => '$2y$10$TGAyjTU8hFuZ1pite0yB9estVBuE50O7q9n6jdTsnGdoSOQ4QKMrS',
        ];
        Members::create($data);
    }
}
