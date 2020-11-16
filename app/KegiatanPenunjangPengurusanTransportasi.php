<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPenunjangPengurusanTransportasi extends Model
{
    protected $table = 'tb_kp_pengurusantransportasi';

    public $timestamps = false;

    protected $fillable = [
        'id_perusahaan',
        'tanggal',
        'nama_barang',
        'nama_kapal',
        'jenis',
        'import_tonase',
        'import_pib',
        'in_ap_tonase',
        'in_ap_pmb',
        'ekspor_tonase',
        'ekspor_peb',
        'uit_ap_tonase',
        'uit_ap_pmb',
        'jumlah_tonase',
        'jumlah_in_uit'
    ];
}
