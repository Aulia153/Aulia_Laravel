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
            1 => 'TK',
            2 => 'SD',
            3 => 'SMP',
            4 => 'SMA/SMK',
            5 => 'D3',
            6 => 'D4/S1',
            7 => 'S2'
        ];

        return $levels[$value] ?? 'Tidak Diketahui';
    }
}
