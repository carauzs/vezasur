<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function home()
    {
        return view('home', [
            'tours' => Tour::all()
        ]);
    }

    public function tour(Request $request, $tourId)
    {
        return view('tour', [
            'tour' => Tour::find($tourId)
        ]);
    }
}
