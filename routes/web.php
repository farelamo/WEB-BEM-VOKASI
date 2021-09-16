<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Index;
use App\Http\Livewire\Admin\Pages\Berita\Berita;
use App\Http\Livewire\Admin\Pages\Galeri\Galeri;
use App\Http\Livewire\Admin\Pages\User\User;
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



Route::middleware(["auth:sanctum", "verified"])->group( function() { 
    Route::get("/dashboard", Index::class)->name("dashboard");
    Route::get("/berita", Berita::class)->name("berita");
    Route::get("/galeri", Galeri::class)->name("galeri");
    Route::get("/user", User::class)->name("user");
    // TAMBAH DISINI ROUTE ADMIN DASHBOARD
});

// TAMBAH DISINI ROUTE HALAMAN USER
Route::get('/', function(){
    return view('user/beranda');
});




