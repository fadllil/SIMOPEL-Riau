<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasDaratTuksTersus extends Model
{
    protected $table = 'tb_fasilitas_darat_tukstersus';

    public $timestamps = false;

    protected $fillable = [
        'id_fasilitas',
        'luas_darat',
        'perkantoran',
        'timbangan',
        'tanki_timbu_cpo',
        'bengkel',
        'uplc',
        'tplb3',
        'power_plan',
        'tanki_bbm',
        'tanki_air',
        'refeneri',
        'tanki_mfo',
        'bangunan_reserve',
        'cooling_tower',
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
