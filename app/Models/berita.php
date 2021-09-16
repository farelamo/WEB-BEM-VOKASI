<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $table = 'event';
    protected $fillable = ['judul', 'waktu', 'tempat', 'deskripsi', 'gambar'];
}
