<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    // protected $guarded = ['id'];
    protected $fillable = ['nama', 'prodi', 'foto', 'gender', 'jabatan', 'jenis_kepengurusan_id'];
    public $timestamps = false;
}
