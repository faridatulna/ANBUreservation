<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Reservation; 


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role_id == 0){
            return redirect()->route('adminlab.index');
        }else if(Auth::user()->role_id == 1){
            return redirect()->route('kalab.index');
        }else{
            return redirect()->route('auth.login');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
