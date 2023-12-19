<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Sliders;


class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sliders = [
            [
                'title' => 'Women Collection 2021',
                'type' => 'NEW SEASON',
                'image_url' => 'slide-01.jpg',
            ],
            [
                'title' => 'Men Collection 2021',
                'type' => 'Jackets & Coats',
                'image_url' => 'slide-02.jpg',
            ],
            [
                'title' => 'NEW TREND',
                'type' => 'New arrivals',
                'image_url' => 'slide-03.jpg',
            ],
        ];
        foreach ($sliders as $value) {
            Sliders::create($value);
        }
    }
}
