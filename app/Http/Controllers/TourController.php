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
        $info = '';
        switch($tourId){
            case 1:
                $info = 'Miami’s newest attraction. From the urban feel of the streets and graffiti walls, to some of the newest, fanciest buildings in the city, Wynwood has the vibe for the fiesta!';
                break;
            case 2:
                $info = 'Wanna feel immersed in the city’s skyscrapers and amazing views? Hop on this tour to Downtown’s top places.';
                break;
            case 3:
                $info = 'Art Deco district is perfect for La Rumba! Miami Beach is the perfect destination for the best party.';
                break;

        }
        return view('tour', [
            'tour' => Tour::find($tourId),
            'dev' => [
                'info' => $info
            ]
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
