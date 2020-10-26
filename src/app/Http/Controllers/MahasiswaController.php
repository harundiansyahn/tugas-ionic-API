<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        return view('mahasiswa',[
            "mahasiswa" => \App\Models\Mahasiswa::all()
        ]);
    }
    //
    public function simpan(Request $request){
        // dd($request->all());
        \App\Models\Mahasiswa::create([
            "nim" => $request->nim,
            "nama" => $request->nama,
            "alamat" => $request->alamat,
            "telepon" => $request->telepon
        ]);

        return redirect()->route('mahasiswa.index');
    }
}
