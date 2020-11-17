<?php

namespace App\Http\Controllers;

use App\Admin;
use App\KegiatanPenunjang;
use App\Pelabuhan;
use App\Penyeberangan;
use App\Surat;
use App\TuksTersus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function User(){
        $value = Session::get('user');
        $user = Admin::where('id_user', $value->id)->first();
        return $user;
    }

    public function index(){
        $user = $this->User();
        $admin = Admin::all();
        $pelabuhan = Pelabuhan::all();
        $penyeberangan = Penyeberangan::all();
        $tukstersus = TuksTersus::all();
        $kegiatanpenunjang = KegiatanPenunjang::all();
        $suratMasuk = Surat::where('id_tujuan', $user->id_user)->get();
        $suratKeluar = Surat::where('id_user', $user->id_user)->get();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            return view('layout.admin.home', compact(
                'user', 'admin', 'pelabuhan', 'penyeberangan',
                'tukstersus', 'kegiatanpenunjang', 'suratMasuk', 'suratKeluar'
            ));
        }
    }
}
