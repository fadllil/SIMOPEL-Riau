<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasSarana extends Model
{
    protected $table = 'tb_fasilitas_sarana';

    public $timestamps = false;

    protected $fillable = [
        'id_fasilitas',
        'dlkr',
        'dlkp',
        'lampu_suar',
        'handy_talky'
    ];
}
