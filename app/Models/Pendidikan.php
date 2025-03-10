<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendidikan extends Model
{
    use HasFactory;
    protected $table = 'pendidikan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'tingkatan',
        'tahun_masuk',
        'tahun_keluar',
    ];
}
