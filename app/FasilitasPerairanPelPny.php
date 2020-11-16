<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasPerairanPelPny extends Model
{
    protected $table = 'tb_fasilitas_perairan_pelpny';

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
        'peruntukan',
        'kedalaman',
        'koordinat',
        'fender',
        'bollar'
    ];
}
