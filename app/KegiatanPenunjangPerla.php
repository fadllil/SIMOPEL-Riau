<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPenunjangPerla extends Model
{
    protected $table = 'tb_kp_perla';

    public $timestamps = false;

    protected $fillable = [
        'id_perusahaan',
        'nama_kapal',
        'bendera',
        'type',
        'kec_ekonomis',
        'status_trayek',
        'pelabuhan_asal',
        'tb_tgl',
        'tb_jam',
        'bk_tgl',
        'bk_jam',
        'jarak',
        'berlayar_tgl',
        'berlayar_jam',
        'berlabuh_tgl',
        'berlabuh_jam',
        'bm_mulai',
        'bm_selesai',
        'pelabuhan_tujuan',
        'b_m',
        'berat',
        'ukuran',
        'penumpang',
        'hewan',
        'jenis_barang',
        'kemasan',
    ];
}
