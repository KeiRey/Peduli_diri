<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin ', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/registrasi','AuthController@registrasi')->name('registrasi');
Route::post('/simpanregistrasi','AuthController@simpanregistrasi');


Route::group(['middleware' => ['auth','prevent-back-history']], function () {

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/profile', 'ProfileController@profile');
    Route::get('/edit/profile/{id}','ProfileController@edit');
    Route::post('/profile', 'ProfileController@update');

    Route::get('/index', 'PerjalananController@index');
    Route::get('/create', 'PerjalananController@create');
    Route::post('/store', 'PerjalananController@store');
    Route::get('/delete/{id}', 'PerjalananController@delete');
    Route::get('/deleteAll', 'PerjalananController@deleteAll');
});
