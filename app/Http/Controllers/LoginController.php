<?php

namespace App\Http\Controllers;

use App\KegiatanPenunjang;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $user = Session::get('user');
            if ($user->level_akses == "Admin"){
                return redirect('/admin/home');
            }else if ($user->level_akses == "Pelabuhan"){
                return redirect('/pelabuhan/home');
            }else if ($user->level_akses == "Penyeberangan"){
                return redirect('/penyeberangan/home');
            }else if ($user->level_akses == "Tuks/Tersus"){
                return redirect('/tukstersus/home');
            }else if ($user->level_akses == "Kegiatan Penunjang"){

                $kegiatanPenunjang = KegiatanPenunjang::where('id_user', $user->id)->first();

                if ($kegiatanPenunjang->bidang_usaha == 'Bongkar Muat'){
                    return redirect('/kegiatanpenunjang/bongkarmuat/home');
                }else if($kegiatanPenunjang->bidang_usaha == 'Pelayaran Rakyat'){
                    return redirect('/kegiatanpenunjang/pelayaranrakyat/home');
                }else if($kegiatanPenunjang->bidang_usaha == 'Pengurusan Transportasi'){
                    return redirect('/kegiatanpenunjang/pengurusantransportasi/home');
                }
            }
        }
    }

    public function login(){
        return view('layout.login');
    }

    public function submit(Request $request){
        $username = $request->username;
        $password = $request->password;

        if ($user = User::where('username', $username)->first()){
            if (md5($password) == $user->password){
                Session::put(['user'=> $user]);
                if ($user->level_akses == "Admin"){
                    return redirect('/admin/home');
                }else if ($user->level_akses == "Pelabuhan"){
                    return redirect('/pelabuhan/home');
                }else if ($user->level_akses == "Penyeberangan"){
                    return redirect('/penyeberangan/home');
                }else if ($user->level_akses == "Tuks/Tersus"){
                    return redirect('/tukstersus/home');
                }else if ($user->level_akses == "Kegiatan Penunjang") {

                    $kegiatanPenunjang = KegiatanPenunjang::where('id_user', $user->id)->first();

                    if ($kegiatanPenunjang->bidang_usaha == 'Bongkar Muat') {
                        return redirect('/kegiatanpenunjang/bongkarmuat/home');
                    } else if ($kegiatanPenunjang->bidang_usaha == 'Pelayaran Rakyat') {
                        return redirect('/kegiatanpenunjang/pelayaranrakyat/home');
                    } else if ($kegiatanPenunjang->bidang_usaha == 'Pengurusan Transportasi') {
                        return redirect('/kegiatanpenunjang/pengurusantransportasi/home');
                    }
                }

            } else {
                return redirect('login')->with(['warning' => 'Password anda salah']);
            }
        } else{
            return redirect('login')->with(['error' => 'Username anda tidak terdaftar']);
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with(['succes' => 'Anda berhasil keluar']);
    }
}
