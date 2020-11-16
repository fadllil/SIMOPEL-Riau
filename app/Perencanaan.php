<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perencanaan extends Model
{
    protected $table = 'tb_perencanaan';

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'id_user',
        'prov',
        'no_prov',
        'tgl_prov',
        'perihal_prov',
        'instansi_prov',
        'kab_kota',
        'no_kab_kota',
        'tgl_kab_kota',
        'perihal_kab_kota',
        'instansi_kab_kota',
        'no_sklh',
        'tgl_sklh',
        'perihal_sklh',
        'instansi_sklh',
        'no_ipl',
        'tgl_ipl',
        'perihal_ipl',
        'instansi_ipl',
        'no_ipp',
        'tgl_ipp',
        'perihal_ipp',
        'instansi_ipp',
    ];
}
