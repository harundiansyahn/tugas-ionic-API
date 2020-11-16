<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertemuanController extends Controller
{
    //
    public function tampilform(){
        return view("pertemuan.form");
    }
}
