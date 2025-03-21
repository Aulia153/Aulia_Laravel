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

    public function getTingkatanAttribute($value)
    {
        $levels = [
            1 => 'SD',
            2 => 'SMP',
            3 => 'SMA',
            4 => 'D3',
            5 => 'S1',
            6 => 'S2',
            7 => 'S3'
        ];

        return $levels[$value] ?? 'Tidak Diketahui';
    }
}
