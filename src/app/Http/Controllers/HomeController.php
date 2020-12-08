<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $kelas = \App\Models\Kelas::all();

        return view('home',[
            "kelas" =>\App\Models\Kelas::where("dosen_id",\Auth::user()->id)->get()
        ]);
        // return view('home',["kelas" => $kelas ]);
        // return view('home',compact("kelas"));
    }
}
