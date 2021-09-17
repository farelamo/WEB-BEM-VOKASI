<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Index;
use App\Http\Livewire\Admin\Pages\Berita\Berita;
use App\Http\Livewire\Admin\Pages\Galeri\Galeri;
use App\Http\Livewire\Admin\Pages\User\User;
use App\Http\Livewire\Admin\Pages\Kepengurusan\Kepengurusan;
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
    Route::get("/dashboard", Index::class);
    Route::get("/user", User::class);
    Route::get('/kepengurusan', Kepengurusan::class);
    // Route::get('/kepengurusan/create', [Kepengurusan::class, ]);
    Route::get("/dashboard", Index::class);
    Route::get("/berita", Berita::class);
    Route::get("/galeri", Galeri::class);
    Route::get("/user", User::class);
    // TAMBAH DISINI ROUTE ADMIN DASHBOARD
});

// TAMBAH DISINI ROUTE HALAMAN USER
Route::get('/', function(){
    return view('user/beranda');
});




