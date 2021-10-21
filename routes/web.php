<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\kepengurusanController;
use App\Http\Controllers\anggotaController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\userController;
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
    Route::resource('/dashboard', homeController::class);
    Route::resource('/kepengurusan',  kepengurusanController::class);
    Route::resource('/anggota',  anggotaController::class);
    Route::resource('/berita',   beritaController::class);
    Route::resource('/galeri',  galeriController::class);
    Route::resource('/user', userController::class)->middleware('superadmin');
    Route::resource('/profil', profilController::class);
    // TAMBAH DISINI ROUTE ADMIN DASHBOARD
});

// TAMBAH DISINI ROUTE HALAMAN USER
Route::get('/', function(){
    return view('user/beranda');
});




