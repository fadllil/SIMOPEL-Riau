<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PajakRetribusiDaerah extends Model
{
    protected $table = 'tb_pajak_retribusidaerah';

    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'tgl',
        'labuh_kapal',
        'tambat',
        'barang',
        'hewan',
        'gudang',
        'lapangan',
        'penyimpanan',
        'pas_penumpang',
        'gol_1',
        'gol_2',
        'gol_3',
        'gol_4',
        'gol_5',
        'gol_6',
        'gol_7',
        'gol_8',
        'papan_reklame',
    ];
}
