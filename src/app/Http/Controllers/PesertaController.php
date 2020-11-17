<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaController extends Controller
{
    //
    public function tampil_form_email(){
        return view("user.email");
    }

    public function tampil_detail_peserta(){
        return view("user.detail");
    }
}
