<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPenunjangBongkarMuat extends Model
{
    protected $table = 'tb_kp_bongkarmuat';

    public $timestamps = false;

    protected $fillable = [
        'id_perusahaan',
        'nama_kapal',
        'bendera',
        'ukuran',
        'nama_agen',
        'jumlah_bm',
        'mulai',
        'selesai',
        'jumlah_buruh',
        'asal_barang',
        'tujuan',
        'jenis',
        'penunjukan',
        'ket',
    ];
}
