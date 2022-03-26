<?php

use App\Http\Controllers\IndoRegionController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', function(){
    return view('dashboard');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin ', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/registrasi', 'AuthController@registrasi')->name('registrasi');
Route::post('/simpanregistrasi', 'AuthController@simpanregistrasi');

Route::get('/home', 'PerjalananController@home')->name('home')->middleware('verified');


//========================Middleware Route================================//

//Admin Route
Route::group(['middleware' => ['auth', 'prevent-back-history', 'ceklevel:admin']], function () {
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/user/cetak_pdf', 'AdminController@cetak_pdf_user');
    Route::get('/admin/cetak_pdf', 'AdminController@cetak_pdf_admin');
});

//User Route
Route::group(['middleware' => ['auth', 'prevent-back-history', 'ceklevel:user']], function () {
    Route::get('/index', 'PerjalananController@index')->name('index');
    Route::get('/create', 'PerjalananController@create');
    Route::post('/store', 'PerjalananController@store');
    Route::get('/delete/{id}', 'PerjalananController@delete');
    Route::get('/deleteAll', 'PerjalananController@deleteAll');
});

//Route Umum
Route::group(['middleware' => ['auth', 'prevent-back-history']], function () {

    Route::get('/profile', 'ProfileController@profile');
    Route::get('/edit/profile/{id}', 'ProfileController@edit');
    Route::post('/profile', 'ProfileController@update');
   
});

//========================end Middleware Route================================//


Auth::routes(['verify' => true]);


// Cuman Nyoba Ajax
Route::get('/produk', 'ProdukController@index');
Route::get('/getData', 'ProdukController@getData');
Route::post('/storeData', 'ProdukController@store');
Route::post('/editData', 'ProdukController@edit');
Route::post('/destroyData', 'ProdukController@destroy');