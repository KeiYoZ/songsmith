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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@check');
Route::get('/info', 'HomeController@phpinfo');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){

    /********** General Routes **************/
	Route::get('/home', 'HomeController@home');	
	Route::get('/logout', function(){
        Session::flush();
        Auth::logout();
        return redirect('/')->with('success', 'Successfully logged out!');
    });

    /********** User Routes **************/
    Route::get('songs/{song}/delete', 'SongController@destroy');
    Route::resource('songs', 'SongController');
});
