<?php

namespace App\Http\Controllers;

use App\kota;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
	public function profil()
	{
		$user = User::where('id', Auth::user()->id)->first();
		return view('layouts.profil', compact('user'));
	}
    public function profile()
    {
		$kota = kota::all();
        $user = User::where('id', Auth::user()->id)->first();
    	return view('Auth.profile',compact('user', 'kota'));
    }

	public function edit()
	{
		$user = User::where('id', Auth::user()->id)->first();
		return view('perjalanan.editprofile',compact('user'));
	}

    public function update(Request $request)
    {
    	$this->validate($request, [
    			'password' => 'confirmed'

    	]);
    	$user = User::where('id', Auth::user()->id)->first();
    	$user->nik = $request->nik;
        $user->alamat = $request->alamat;
    	$user->no_telp = $request->no_telp;
        $user->name = $request->name;
    	$user->email = $request->email;
    	if (!empty($request->password)) {
    		$user->password = Hash::make($request->password);	
    	}
    	$user->update();
		if ($request->hasFile('gambar')){
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $user->gambar=$request->file('gambar')->getClientOriginalName();
            $user->save();
        }

		Toastr::success('Anda berhasil mengedit profile anda', 'Sukses');
    	return redirect('/profile');

    }
}
