<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proker extends Model
{
    use HasFactory;
    protected $table = 'proker';
    protected $fillable = ['judul_proker', 'gambar', 'tipe', 'jenis_kepengurusan_id'];
}
