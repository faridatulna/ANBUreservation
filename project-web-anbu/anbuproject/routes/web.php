<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Reservation;
use App\Laboratory;
use App\Computer;
use Illuminate\Http\Request;

// Reservation
Route::resource('reservation','ReservationController')->only([
    'store'
]);

Route::get('/', function (Request $request) {

	if(!$request->keyword) {
		$reservations = Reservation::all();
		$reservations = Reservation::paginate(5);
	} else {
			$reservations = Reservation::when($request->keyword, function ($query) use ($request) {
				$query->where('nrp', 'like', "%{$request->keyword}%")
					/*->orWhere('nama', 'like', "%{$request->keyword}%")
					->orWhere('nopc', 'like', "%{$request->keyword}%")
					->orWhere('id_lab', 'like', "%{$request->keyword}%")
					->orWhere('tgl_pinjam', 'like', "%{$request->keyword}%")*/;
			})->paginate();
			$reservations->appends($request->only('keyword'));
	}

    $computer = Computer::pluck('no_pc','id_lab');
    $lab = Laboratory::pluck('nama_lab','id');
    return view('welcome', compact('reservations','lab','computer'));
})->name('welcome');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// admin
Route::get('/admin', 'adminlabController@index')->name('adminlab.index')->middleware('auth');
Route::post('adminsetuju/{id}', 'adminlabController@setuju')->name('adminlab.setuju')->middleware('auth');

// kalab
Route::get('/kalab', 'kalabController@index')->name('kalab.index')->middleware('auth');
Route::post('kalabsetuju/{id}', 'kalabController@setuju')->name('kalab.setuju')->middleware('auth');

//resources
Route::resource('computer','ComputerController');
