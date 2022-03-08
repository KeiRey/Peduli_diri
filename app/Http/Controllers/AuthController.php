<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
            return redirect('/login');
    }

    public function logout()
    {
        Auth::Logout();
        return redirect('/login')->with('toast_warning', 'Anda Telah Logout');

    }

    public function registrasi()
    {
        return view('Auth.registrasi');
    }

    public function simpanregistrasi(Request $request)
    {
        // dd($request->all());
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'kota_id' => 'isi kota anda',
            'gambar' => 'default2.png',
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login')->with('toast_success', 'Silahkan Login Dengan Akun Yang Anda Buat');
    }
}
