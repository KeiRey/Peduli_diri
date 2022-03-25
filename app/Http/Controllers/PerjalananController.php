<?php

namespace App\Http\Controllers;

use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


use App\perjalanan;

class PerjalananController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $data = perjalanan::where('user_id', Auth::user()->id)
                ->simplePaginate(3);
        return view('perjalanan.index',compact('data'));
    }

    public function create()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if (empty($user->nik)) {
            Toastr::warning('Profil anda belum lebkap', 'Peringatan !');
            return redirect('/profile');
        }

        if (empty($user->no_telp)) {
            Toastr::warning('Profil anda belum lebkap', 'Peringatan !');
            return redirect('/profile');
        }

        return view('perjalanan.create');
    }

    public function store(Request $request)
    {
        
        $create = [
            'nama_perjalanan' => $request -> nama_perjalanan,
            'user_id' => Auth::user()->id,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'lokasi' => $request -> lokasi,
            'suhu_tubuh' => $request -> suhu_tubuh
        ];
        Toastr::success('Anda berhasil menambah data', 'Sukses');
        perjalanan::create($create);
        return redirect('/index');
        
    }

    public function delete($id)
    {
        perjalanan::find($id)->delete();
        Toastr::error('Anda telah menghapus 1 data', 'Peringatan');
        return redirect('/index');
    }

    public function deleteAll()
    {
        perjalanan::truncate();
        return redirect('/index');
    }

}
