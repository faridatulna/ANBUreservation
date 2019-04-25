<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Computer;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

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

        $reservations = Reservation::/*where('id_lab',Auth::user()->id_lab)
                                    ->*/where('status',0)
                                    ->get();
        // die ($reservations);
        $computers = Computer::all();
        return view('adminlab.index', compact('reservations'));
    }

    public function setuju(Request $request, $id){
        $reservation = Reservation::where('id','=',$id)->first();
        // die($reservation);
        // dd($request->all());
        $reservation->status = $request->input('status');
        $reservation->save();
        return redirect()->route('admin.index');
    }
}
