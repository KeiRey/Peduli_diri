<?php

use App\Http\Controllers\IndoRegionController;
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


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin ', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/registrasi', 'AuthController@registrasi')->name('registrasi');
Route::post('/simpanregistrasi', 'AuthController@simpanregistrasi');

Route::get('/', function(){
    return view('dashboard');
});

Route::get('/home', 'PerjalananController@home')->name('home')->middleware('verified');

Route::group(['middleware' => ['auth', 'prevent-back-history']], function () {

    Route::get('/profile', 'ProfileController@profile');
    Route::get('/edit/profile/{id}', 'ProfileController@edit');
    Route::post('/profile', 'ProfileController@update');

    Route::get('/index', 'PerjalananController@index')->name('index');
    Route::get('/create', 'PerjalananController@create');
    Route::post('/store', 'PerjalananController@store');
    Route::get('/delete/{id}', 'PerjalananController@delete');
    Route::get('/deleteAll', 'PerjalananController@deleteAll');
});

Auth::routes(['verify' => true]);

Route::get('/form', [IndoRegionController::class,'form'])->name('form');
Route::post('/getkabupaten', [IndoRegionController::class, 'getkabupaten'])->name('getkabupaten');
Route::post('/getkecamatan', [IndoRegionController::class, 'getkecamatan'])->name('getkecamatan');
Route::post('/getdesa', [IndoRegionController::class, 'getdesa'])->name('getdesa');  

