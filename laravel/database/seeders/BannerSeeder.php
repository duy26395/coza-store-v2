<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banner = [
            [
                'title' => 'Women Collection 2021',
                'type' => 'NEW SEASON',
                'url' => 'banner-01.jpg',
            ],
            [
                'title' => 'Men Collection 2021',
                'type' => 'Jackets & Coats',
                'url' => 'banner-02.jpg',
            ],
            [
                'title' => 'Men Collection 2021',
                'type' => 'New arrivals',
                'url' => 'banner-03.jpg',
            ],
            [
                'title' => 'NEW TREND',
                'type' => 'Play better than',
                'url' => 'banner-04.jpg',
            ],
            [
                'title' => 'NEW SEASON FASHION WEEK 2021',
                'type' => 'NEW TREND',
                'url' => 'banner-05.jpg',
            ],
            [
                'title' => 'VIET NAM FASHION WEEK 20/2021',
                'type' => 'COLLECTION',
                'url' => 'banner-06.jpg',
            ]

        ];
        foreach ($banner as $value) {
            Banner::create($value);
        }
    }
}
