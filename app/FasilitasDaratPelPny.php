<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasDaratPelPny extends Model
{
    protected $table = 'tb_fasilitas_darat_pelpny';

    public $timestamps = false;

    protected $fillable = [
        'id_fasilitas',
        'luas_darat',
        'perkantoran',
        'timbangan',
        'bengkel',
        'uplc',
        'tplb3',
        'power_plan',
        'tanki_bbm',
        'tanki_air',
        'bangunan_utility',
        'gardu_listrik_pln',
        'tempat_penimbunan',
        'kantor_d_pos',
        'musholla_d_kantin',
        'gudang_tertutup',
        'gudang_terbuka',
        'mess',
        'kbkki'
    ];
}
