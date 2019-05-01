<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class kalabController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

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
										->*/where('status', 2)
										->/*get()*/paginate(5);
		} else {				
			$reservations = Reservation::when($request->keyword, function ($query) use ($request) {
				$query->where('nama', 'like', "%{$request->keyword}%")
					->orWhere('nrp', 'like', "%{$request->keyword}%")
					/*->orWhere('nopc', 'like', "%{$request->keyword}%")
					->orWhere('id_lab', 'like', "%{$request->keyword}%")
					->orWhere('tgl_pinjam', 'like', "%{$request->keyword}%")*/;
			})->paginate($request->limit ? $request->limit : 5);
            
            $reservations->appends($request->only('keyword', 'limit'));		
		}
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
