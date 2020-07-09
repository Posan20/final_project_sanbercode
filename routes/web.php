<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});
Route::resource('pertanyaan', 'PertanyaanController'); 
// Route::resource('/pertanyaan/create', 'PertanyaanController');
// Route::post('/pertanyaan', 'PertanyaanController@store');
// Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
// Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit'); 
// Route::put('/pertanyaan/{id}', 'PertanyaanController@update'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

