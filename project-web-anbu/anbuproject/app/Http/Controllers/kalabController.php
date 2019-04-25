<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class kalabController extends Controller
{
    //
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $reservations = Reservation::/*where('id_lab',Auth::user()->id_lab)
                                    ->*/where('status', 2)
                                    ->get();
        // die ($reservations);
        // $computers = Computer::all();
        return view('kalab.index', compact('reservations'));
    }

    public function setuju(Request $request, $id) {
        $reservation = Reservation::where('id','=',$id)->first();
        // die($reservation);
        // dd($request->all());
        $reservation->status = $request->input('status');
        $reservation->save();
        return redirect()->route('kalab.index');
    }
}
