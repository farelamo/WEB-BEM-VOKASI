<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $table = 'event';
    protected $fillable = ['judul', 'timeline', 'deskripsi', 'gambar'];
    public $timestamps = false;
}
