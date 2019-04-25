<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Illuminate\Support\Facades\Auth;

class adminlabController extends Controller
{
    //
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $reservations = Reservation::where('id_lab',Auth::user()->id_lab)
                                    ->where('status',0)
                                    ->get();
        // die ($reservations);
        return view('adminlab.index', compact('reservations'));
    }

    public function setuju($id){
        $reservation = Reservation::where('id','=',$id)->first();
        // die($reservation);
        $reservation->status = 2;
        $reservation->save();
        return redirect()->route('admin.index');
    }
}
