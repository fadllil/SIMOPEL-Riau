<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SewaPerairan extends Model
{
    protected $table = 'tb_sewa_perairan';

    public $timestamps = false;

    protected $fillable = [
        'id_tukstersus',
        'tuks_tersus',
        'no_perjanjian',
        'awal',
        'akhir',
        'luas_perjanjian',
        'tarif',
        'pungutan',
        'denda',
        'total',
        'ket'
    ];
}
