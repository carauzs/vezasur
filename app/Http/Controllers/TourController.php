<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Carbon\Carbon;
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
            'tour' => Tour::find($tourId),
        ]);
    }

    public function contactInfo(Request $request, $tourId)
    {
        return view('contact-info', [
            'tour' => Tour::find($tourId),
            'registration' => (object) [
                'date' => Carbon::now()->format('m/d/Y'),
                'time' => '09:00PM'
            ]
        ]);
    }

    public function who(Request $request)
    {
        return view('who');
    }
}
