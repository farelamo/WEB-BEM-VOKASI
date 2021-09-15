<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Index;
use App\Http\Livewire\Admin\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware(["auth:sanctum", "verified"])->group(function () {
    Route::get("/dashboard", Index::class)->name("dashboard");
    Route::get("/user", User::class)->name("user");
    // TAMBAH DISINI ROUTE ADMIN DASHBOARD
});
    
// Route::middleware(["auth:sanctum", "verified"])
//     ->get("/user", User::class)->name("user")
    // TAMBAH DISINI ROUTE ADMIN DASHBOARD
  //  ;

Route::get('/', function(){
    return view('user/beranda');
});

// TAMBAH DISINI ROUTE HALAMAN USER


