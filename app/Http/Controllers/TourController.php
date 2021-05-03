<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
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

    public function contact(Request $request, $tourId)
    {
        return view('contact', [
            'tour' => Tour::find($tourId)
        ]);
    }

    public function resume(Request $request, $tourId)
    {
        return view('resume', [
            'tour' => Tour::find($tourId)
        ]);
    }

    public function who(Request $request)
    {
        return view('who');
    }

    public function saveOrder(Request $request)
    {
        $reservation = new Reservation();
        $reservation->address = $request->input('address');
        $reservation->billing_address = $request->input('billing_address');
        $reservation->credit_card = $request->input('credit_card');
        $reservation->date = Carbon::parse($request->input('date'))->toDateTimeString();
        $reservation->first_name = $request->input('first_name');
        $reservation->last_name = $request->input('last_name');
        $reservation->payment = $request->input('payment');
        $reservation->time = $request->input('time');
        $reservation->tour_id = $request->input('tour_id');
        $reservation->save();

        return response()->json();
    }
}
