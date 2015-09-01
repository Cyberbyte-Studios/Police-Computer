<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $activeCrimes = App\Crime::all()->where('active', 1); //->orderBy('bounty', 'desc')
    return view('home', ['crimes' => $activeCrimes]);
});

Route::get('/crime/{id}', function ($id) {
    $crime = App\Crime::where('id', $id)->first();
    $logs = App\Log::all()->where('crime_id', $id);
    return view('crime', ['crime' => $crime, 'page_title' => $crime->crime, 'logs' => $logs]);
});

Route::get('/crimes/', function () {
    $crimes = App\Crime::all();
    return view('crimes', ['crimes' => $crimes, 'page_title' => 'Crimes']);
});

Route::get('/criminal/{id}', function ($id) {
    $criminal = App\Log::all()->where('id', $id)->first();
    return view('crime', ['criminal' => $criminal, 'page_title' => $criminal->name . ' - Player Profile']);
});

// Auth System
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');