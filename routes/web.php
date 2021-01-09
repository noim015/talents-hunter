<?php
use RealRashid\SweetAlert\Facades\Alert;
Use App\User;

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




Route::get('/', function () {
   $talents = User::paginate(2);
    return view('welcome', compact('talents'));
})->name('myhome');

Auth::routes();

Route::get('updateprofile','HomeController@showprofile')->name('profile.update');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/updateprofile','HomeController@updateprofile')->name('updateprofile');
Route::get('/search','SearchController@search')->name('search');
Route::get('/show/{id}','SearchController@show')->name('projects.show');