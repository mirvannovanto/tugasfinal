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
// Route::get('/master', function () {
//     return view('master');
// });
// Route::get('/Berita', function () {
//     return view('index');
// });

// Route::get('/create', function () {
//     return view('create');
// });
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/Berita/create', 'BeritaController@create');
Route::post('/Berita', 'BeritaController@store');

Route::get('/Berita/index', 'BeritaController@index');


Route::get('/', function () {
    return view('/home');
});

Route:: get('/home','HomeController@home');
Route:: get('/about','HomeController@about');
Route:: get('/contact','HomeController@contact');
Route:: get('/login','HomeController@login');
Route:: get('/signup','AuthController@signup');
Route:: get('/password','AuthController@password');

//Route::resource('Berita', 'BeritaController');