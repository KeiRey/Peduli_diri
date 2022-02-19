<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\perjalanan;

class PerjalananController extends Controller
{

    public function index()
    {
        $data = perjalanan::where('user_id', Auth::user()->id)
                ->simplePaginate(3);
        return view('perjalanan.index',compact('data'));
    }

    public function create()
    {
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

        perjalanan::create($create);
        return redirect('/index')->with('toast_success', 'Berhasil Menambah Data');
        
    }

    public function delete($id)
    {
        perjalanan::find($id)->delete();
        return redirect('/index')->with('toast_success', 'Berhasil Menghapus Data');
    }

    public function deleteAll()
    {
        perjalanan::truncate();
        return redirect('/index');
    }

}
