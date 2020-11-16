<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasPeralatan extends Model
{
    protected $table = 'tb_fasilitas_peralatan';

    public $timestamps = false;

    protected $fillable = [
        'if_fasilitas',
        'hmc',
        'terminal_tractor',
        'st40',
        'primer_movers',
        'flattop_trailer',
        'trailer20',
        'flexible_hose',
        'pipe_line',
        'loader',
        'shore_crane',
        'excavator',
        'dump_truck',
        'forklift'
    ];
}
