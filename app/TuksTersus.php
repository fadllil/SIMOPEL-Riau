<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TuksTersus extends Model
{
    protected $table = 'tb_tukstersus';

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
        'npwp',
        'nib',
        'nama_pj',
        'posisi_perusahaan'
    ];
}
