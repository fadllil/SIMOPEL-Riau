<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenjualanPasMasuk extends Model
{
    protected $table = 'tb_penjualan_pas_masuk';

    public $timestamps = false;

    protected $fillable = [
        'id_penyeberangan',
        'tanggal',
        'penumpang',
        'gol1',
        'gol2',
        'gol3',
        'gol4',
        'gol5',
        'gol6',
        'gol7',
        'gol8'
    ];
}
