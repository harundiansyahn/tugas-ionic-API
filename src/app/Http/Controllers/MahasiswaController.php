<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        return view('mahasiswa',[
            "mahasiswa" => Mahasiswa::all()
        ]);
    }
    //
    public function simpan(Request $request){
        // dd($request->all());
        Mahasiswa::create([
            "nim" => $request->nim,
            "nama" => $request->nama,
            "alamat" => $request->alamat,
            "telepon" => $request->telepon
        ]);

        return redirect()->route('mahasiswa.index');
    }

    public function hapus($id){

        Mahasiswa::destroy($id);

        // tampilkan halaman utamanya
        return redirect()->route('mahasiswa.index');
    }

    public function tampil($id){
        // cari datanya
        $mahasiswa = Mahasiswa::find($id);
        // kirim datanya ke view
        return view('mahasiswa',[
            "mahasiswa" => Mahasiswa::all(),
            "data" => $mahasiswa
        ]);
    }

    public function update(Request $request,$id){
        // cari data yang mau dirubah
        $mahasiswa = Mahasiswa::find($id);

        // jalankan perintah rubah
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->telepon = $request->telepon;
        $mahasiswa->save();

        // jika berhasil tampilkan halaman utama
        return redirect()->route('mahasiswa.index');
    }
}
