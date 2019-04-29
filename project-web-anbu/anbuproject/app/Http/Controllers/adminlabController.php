<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Computer;
use App\Laboratory;
use App\User;

class adminlabController extends Controller
{
    //
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
		if(!$request->keyword){
			$reservations = Reservation::/*where('id_lab',Auth::user()->id_lab)
										->*/where('status',0)
										->paginate(5);
										//->get();
		} else {				
			$reservations = Reservation::when($request->keyword, function ($query) use ($request) {
				$query->where('nama', 'like', "%{$request->keyword}%")
					->orWhere('nrp', 'like', "%{$request->keyword}%")
					/*->orWhere('nopc', 'like', "%{$request->keyword}%")
					->orWhere('id_lab', 'like', "%{$request->keyword}%")
					->orWhere('tgl_pinjam', 'like', "%{$request->keyword}%")*/;
			})->paginate();
			
			$reservations->appends($request->only('keyword'));									
		}
        // die ($reservations);
        $computer = Computer::all();
		$computer = Computer::paginate(10);
        // $pc = Computer::pluck('no_pc','id');
        $lab = Laboratory::pluck('nama_lab','id');
        return view('adminlab.index', compact('reservations','lab','computer','users'));
    }

    public function setuju(Request $request, $id){
        $reservation = Reservation::where('id','=',$id)->first();
        // die($reservation);
        // dd($request->all());
        $reservation->status = $request->input('status');
        $reservation->save();
        return redirect()->route('adminlab.index');
    }
}
