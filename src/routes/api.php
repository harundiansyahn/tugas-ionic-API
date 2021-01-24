<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("login",function(Request $request){
    $is_login = false;
    $user_id = "";

    if(\Auth::attempt($request->only("email","password"))){
        $is_login = true;
        $user_id = \Auth::user()->id;
    }

    return response()->json([
        "is_login" => $is_login,
        "user_id" => $user_id

    ]);
});

Route::post("kelas", function(Request $Request){
    $kelas = \App\Models\User::find($request->user_id)->mahasiswakelas()->get();

    return response()->json([
    "kelas" => $kelas    
    ]);  
}); 

Route::post("detailkelas", function(Request $Request){
    $detailkelas = \App\Models\User::find($request->user_id)->kelas()->get();

    return response()->json([
    "detailkelas" => $detailkelas    
    ]);  
}); 