<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    //

    public function tampil_form_absensi(){
        return view("absensi.form");
    }
}
