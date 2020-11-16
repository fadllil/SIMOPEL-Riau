<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanPenunjang extends Model
{
    protected $table = 'tb_kegiatanpenunjang';

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'id_user',
        'nama_perusahaan',
        'alamat_perusahaan',
        'bidang_usaha',
        'nama_pj',
        'alamat_pj',
        'nomor_izin_usaha',
        'tgl_izin_usaha',
        'npwp'
    ];
}
