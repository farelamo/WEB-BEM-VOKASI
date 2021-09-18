<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urus extends Model
{
    // use HasFactory;
    protected $table = 'jenis_kepengurusan';
    protected $fillable = ['jenis', 'deskripsi', 'logo', 'gambar'];
    public $timestamps = false;
}
