<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model
{
    protected $table = 'pengalaman_kerja';
    protected $primaryKey = 'id';
    protected $filable = [
        'nama', 'jabatan', 'tahun_masuk', 'tahun_keluar',
    ];
}