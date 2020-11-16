<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasPerairanTuksTersus extends Model
{
    protected $table = 'tb_fasilitas_perairan_tukstersus';

    public $timestamps = false;

    protected $fillable = [
        'id_fasilitas',
        'type',
        'ukuran',
        'breasting_dolphin',
        'mooring_dolphin',
        'trestle',
        'cause_way',
        'catwalk',
        'kontruksi',
        'peruntukan',
        'kedalaman',
        'koordinat',
        'fender',
        'bollar'
    ];
}
