<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('tour')->truncate();
        $tours = [
            ['WYNWOOD', 'vezasur5.png', '2 HOUR RIDE OF GOOD VIBES', '600', 'https://book.peek.com/s/ceb11bc6-b839-42e9-887e-23d7d1fcad2a/loxXE'],
            ['MIAMI BEACH', 'vezasur1.png', '2 HOUR RIDE OF GOOD VIBES', '600', 'https://book.peek.com/s/ceb11bc6-b839-42e9-887e-23d7d1fcad2a/JyD1L'],
            ['LITLE HAVANA', 'vezasur6.png', '2 HOUR RIDE OF GOOD VIBES', '600', 'https://book.peek.com/s/ceb11bc6-b839-42e9-887e-23d7d1fcad2a/XDvLq'],
        ];
        foreach ($tours as $tour) {
            $record = new Tour();
            $record->name = $tour[0];
            $record->image = '/images/' . $tour[1];
            $record->title = $tour[2];
            $record->cost = $tour[3];
            $record->url = $tour[4];
            $record->images = [];
            $record->save();
        }
    }
}
