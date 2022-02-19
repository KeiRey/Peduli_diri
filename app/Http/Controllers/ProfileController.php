<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = User::where('id', Auth::user()->id)->first();

    	return view('Auth.profile',compact('user'));
    }

	public function edit()
	{
		$user = User::where('id', Auth::user()->id)->first();
		return view('Auth.editProfile',compact('user'));
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

    	return redirect('/profile')->with('succes','Berhasil MengUpdate Data');

    }
}
