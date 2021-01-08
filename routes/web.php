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
//     return view('berita.show');
// });


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
Route::get('/Berita/create', 'BeritaController@create');
Route::post('/Berita', 'BeritaController@store');
Route::get('/Berita/{id}', 'BeritaController@show');
Route::get('/Berita/index', 'BeritaController@index');
Route::get('/Berita/{tanyaID}/edit', 'BeritaController@edit');
Route::put('/Berita/{tanyaID}', 'BeritaController@update');




Route:: get('/home','HomeController@home');
Route:: get('/about','HomeController@about');
Route:: get('/contact','HomeController@contact');
Route:: get('/login','HomeController@login');
Route:: get('/signup','AuthController@signup');
Route:: get('/password','AuthController@password');

//Route::resource('Berita', 'BeritaController');