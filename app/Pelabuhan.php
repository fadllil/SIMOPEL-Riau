<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelabuhan extends Model
{
    protected $table = 'tb_pelabuhan';

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'id_user',
        'nama_pelabuhan',
        'alamat_pelabuhan',
        'posisi_pelabuhan'
    ];
}
