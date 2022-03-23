<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use PDF;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.index', compact('user'));
    }
    public function cetak_pdf_user()
    {
        $user = User::where('level', 'user')->get();
        $pdf = PDF::loadview('admin.user_pdf', ['user' => $user]);
        // return $pdf->download('laporan-pegawai-pdf');
        return $pdf->stream();
    }
    public function cetak_pdf_admin()
    {
        $admin = User::where('level', 'admin')->get();
        $pdf = PDF::loadview('admin.admin_pdf', ['admin' => $admin]);
        // return $pdf->download('laporan-pegawai-pdf');
        return $pdf->stream();
    }
}
