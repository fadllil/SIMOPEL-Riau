<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperasionalTuksTersus extends Model
{
    protected $table = 'tb_op_tukstersus';

    public $timestamps = false;

    protected $fillable = [
        'nama_perusahaan',
        'nama_kapal',
        'type_kapal',
        'gt',
        'panjang',
        'lebar',
        'draft',
        'kd_pel_asal',
        'kd_jarak',
        'kd_wkt_berlayar',
        'kd_tb_tgl',
        'kd_tb_jam',
        'kd_tambat',
        'kd_jam_labuh'.
        'kb_pel_tujuan',
        'kb_jarak',
        'kb_tgl',
        'kb_jam',
        'nomor_sp',
        'tgl_sp',
        'kon_bahan_bakar',
        'jen_bahan_bakar',
        'ket'
    ];
}
