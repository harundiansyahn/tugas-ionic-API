<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    //
    public function index(){
        return view('matakuliah',[
            "matakuliah" => Matakuliah::all()
        ]);
    }

    public function simpan(Request $request){
        Matakuliah::create([
            "kodemk" => $request->kodemk,
            "namamk" => $request->namamk,
            "dosen" => $request->dosen,
            "ruang" => $request->ruang
        ]);

        return redirect()->route('matakuliah.index');
    }
}
