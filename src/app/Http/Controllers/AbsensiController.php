<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    //

    public function tampil_form_absensi($id){
        return view("absensi.form",[
            "pertemuan" => \App\Models\Pertemuan::find($id)
        ]);
    }
}
