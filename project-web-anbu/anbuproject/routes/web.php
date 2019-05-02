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
			})->paginate($request->limit ? $request->limit : 5);
			
			$reservations->appends($request->only('keyword', 'limit'));	
	}
	$lab = Laboratory::all();
	// return $lab;
    return view('welcome', compact('reservations','lab'));
})->name('welcome');


Route::post( '/get/computer', 'ReservationController@computer' )->name( 'loadComputer' );
// Route::get( '/get/computer/{id_lab}', 'ReservationController@computer' )->name( 'loadComputer' );

Auth::routes();
// admin
Route::get('/admin', 'adminlabController@index')->name('adminlab.index')->middleware('auth');
Route::post('adminsetuju/{id}', 'adminlabController@setuju')->name('adminlab.setuju')->middleware('auth');

// download files
Route::get('/download/{id}', function ($filename) {
    $file= public_path('files/').$filename;
    return response()->download($file, $filename);
})->middleware('auth')->name('getDownload');

// kalab
Route::get('/kalab', 'kalabController@index')->name('kalab.index')->middleware('auth');
Route::post('kalabsetuju/{id}', 'kalabController@setuju')->name('kalab.setuju')->middleware('auth');

//resources
Route::resource('computer','ComputerController');
Route::resource('reservation','ReservationController')->only([
	'index', 'store'
]);

Auth::routes();