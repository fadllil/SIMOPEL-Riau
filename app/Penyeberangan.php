<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyeberangan extends Model
{
    protected $table = 'tb_penyeberangan';

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'id_user',
        'nama_penyeberangan',
        'alamat_penyeberangan',
        'posisi_penyeberangan'
    ];
}
