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

// Reservation
Route::resource('reservation','ReservationController');

Route::get('/', function () {
    $reservations = Reservation::all();
    return view('welcome', compact('reservations'));
})->name('welcome');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// admin
Route::get('/admin', 'adminlabController@index')->name('admin.index')->middleware('auth');
Route::post('adminsetuju/{id}', 'adminlabController@setuju')->name('admin.setuju')->middleware('auth');

// kalab
Route::get('/kalab', 'kalabController@index')->name('kalab.index')->middleware('auth');
Route::post('kalabsetuju/{id}', 'kalabController@setuju')->name('kalab.setuju')->middleware('auth');

// apa ini?
Route::get('/main', 'MainController@index');
