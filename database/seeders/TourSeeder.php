<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tours = [
            ['WYNWOOD', '2 HOUR RIDE OF GOOD VIBES', '500'],
            ['MIAMI BEACH', '2 HOUR RIDE OF GOOD VIBES', '500'],
            ['DOWNTOWN/BRICKELL', '2 HOUR RIDE OF GOOD VIBES', '500'],
        ];
        foreach ($tours as $tour) {
            $record = new Tour();
            $record->name = $tour[0];
            $record->image = '/images/tour1.png';
            $record->title = $tour[1];
            $record->cost = $tour[2];
            $record->save();
        }
    }
}
