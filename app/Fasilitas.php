<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'tb_fasilitas';

    public $timestamps = false;

    protected $fillable = [
        'id_user'
    ];
}
