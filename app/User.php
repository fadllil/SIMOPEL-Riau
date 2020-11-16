<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';

    public function pelabuhan()
    {
        return $this->hasOne(Pelabuhan::class, 'id_user');
    }

    public function penyeberangan()
    {
        return $this->hasOne(Penyeberangan::class, 'id_user');
    }

    public function tukstersus()
    {
        return $this->hasOne(TuksTersus::class, 'id_user');
    }

    public function kegiatanpenunjang()
    {
        return $this->hasOne(KegiatanPenunjang::class, 'id_user');
    }

    public function perencanaan()
    {
        return $this->hasOne(Perencanaan::class, 'id_user');
    }

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password', 'level_akses',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
