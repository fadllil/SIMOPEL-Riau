<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Fasilitas;
use App\FasilitasDaratPelPny;
use App\FasilitasDaratTuksTersus;
use App\FasilitasPerairanPelPny;
use App\FasilitasPerairanTuksTersus;
use App\FasilitasPeralatan;
use App\FasilitasSarana;
use App\KegiatanPenunjang;
use App\Pelabuhan;
use App\Penyeberangan;
use App\Perencanaan;
use App\Surat;
use App\TuksTersus;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    // Mengambil Data User
    // Mengambil Data User
    public function getUser($username){
        $user = User::where('username', $username)->first();
        $id_user = $user->id;
        return $id_user;
    }

    public function User(){
        $value = Session::get('user');
        $user = Admin::where('id_user', $value->id)->first();
        return $user;
    }

    // Controller Admin
    public function admin(){
        $user = $this->User();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $admin_list = DB::table('tb_admin')
                ->join('users', 'tb_admin.id_user','=','users.id')
                ->select('tb_admin.*', 'users.username', 'users.password', 'users.email')
                ->get();
            return view('layout.admin.admin', compact('admin_list', 'value', 'user'));
        }
    }

    // Tambah Data Pelabuhan
    public function tambahAdmin(Request $request){
        $username = $request->username;
        $password = $request->password;
        $level_akses= $request->level_akses;
        $email= $request->email;
        $nama = $request->nama;
        $jabatan = $request->jabatan;

        $user = new User();
        $user->username =$username;
        $user->password =md5($password);
        $user->level_akses =$level_akses;
        $user->email =$email;

        if (User::where('username', $username)->first()){
            return redirect('/admin/admin')->with(['warning' => 'Username admin sudah terdaftar!']);
        }else{
            $user->save();
        }

        $id_user = AdminController::getUser($username);

        $admin = new Admin();
        $admin->id_user = $id_user;
        $admin->nama = $nama;
        $admin->jabatan = $jabatan;

        if (Pelabuhan::where('id_user', $id_user)->first()){
            return redirect('/admin/admin')->with(['warning' => 'Admin sudah terdaftar!']);
        }else{
            $admin->save();
            return redirect('/admin/admin')->with(['succes' => 'Berhasil tambah data!']);
        }
    }

    // Edit Data Admin
    public function editAdmin($id, Request $request){
        $admin = Admin::findOrFail($id);
        $user = User::findOrFail($admin->id_user);
        $admin->update($request->all());
        $user->email = $request->email;
        $user->update();
        return redirect('/admin/admin')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Hapus Data admin
    public function hapusAdmin($id){
        $admin = Admin::FindOrFail($id);
        $id_user = $admin->id_user;
        $user = User::FindOrFail($id_user);
        $admin->delete();
        $user->delete();
        return redirect('/admin/admin')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // Controller Pelabuhan
    public function pelabuhan(){
        $user = $this->User();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $pelabuhan_list = DB::table('tb_pelabuhan')
                ->join('users', 'tb_pelabuhan.id_user','=','users.id')
                ->select('tb_pelabuhan.*', 'users.username', 'users.password', 'users.email')
                ->get();
            return view('layout.admin.pelabuhan', compact('pelabuhan_list', 'value', 'user'));
        }
    }

    // Tambah Data Pelabuhan
    public function tambahPelabuhan(Request $request){
        $username = $request->username;
        $password = $request->password;
        $level_akses= $request->level_akses;
        $email = $request->email;
        $nama_pelabuhan = $request->nama_pelabuhan;
        $alamat_pelabuhan = $request->alamat_pelabuhan;
        $posisi_pelabuhan = $request->posisi_pelabuhan;

        $user = new User();
        $user->username =$username;
        $user->password =md5($password);
        $user->level_akses =$level_akses;
        $user->email = $email;

        if (User::where('username', $username)->first()){
            return redirect('/admin/pelabuhan')->with(['warning' => 'Username pelabuhan sudah terdaftar!']);
        }else{
            $user->save();
        }

        $id_user = AdminController::getUser($username);

        $perencanaan = new Perencanaan();
        $perencanaan->id_user = $id_user;

        $pelabuhan = new Pelabuhan();
        $pelabuhan->id_user = $id_user;
        $pelabuhan->nama_pelabuhan = $nama_pelabuhan;
        $pelabuhan->alamat_pelabuhan = $alamat_pelabuhan;
        $pelabuhan->posisi_pelabuhan = $posisi_pelabuhan;

        $fasilitas = new Fasilitas();
        $fasilitas->id_user = $id_user;
        if (Pelabuhan::where('id_user', $id_user)->first()){
            return redirect('/admin/pelabuhan')->with(['warning' => 'Pelabuhan sudah terdaftar!']);
        }else{
            $perencanaan->save();
            $pelabuhan->save();
            $fasilitas->save();

            $getFasilitas = Fasilitas::where('id_user', $id_user)->first();

            $fasilitas_darat = new FasilitasDaratPelPny();
            $fasilitas_darat->id_fasilitas = $getFasilitas->id;

            $fasliitas_perairan = new FasilitasPerairanPelPny();
            $fasliitas_perairan->id_fasilitas = $getFasilitas->id;

            $fasliitas_peralatan = new FasilitasPeralatan();
            $fasliitas_peralatan->id_fasilitas = $getFasilitas->id;

            $datasarana = ', , , ';
            $fasliitas_sarana = new FasilitasSarana();
            $fasliitas_sarana->id_fasilitas = $getFasilitas->id;
            $fasliitas_sarana->dlkr = $datasarana;
            $fasliitas_sarana->dlkp = $datasarana;

            $fasilitas_darat->save();
            $fasliitas_perairan->save();
            $fasliitas_peralatan->save();
            $fasliitas_sarana->save();

            return redirect('/admin/pelabuhan')->with(['succes' => 'Berhasil tambah data!']);
        }
    }

    // Edit Data Pelabuhan
    public function editPelabuhan($id, Request $request){
        $pelabuhan = Pelabuhan::findOrFail($id);
        $user = User::findOrFail($pelabuhan->id_user);
        $user->email = $request->email;
        $pelabuhan->update($request->all());
        $user->update();
        return redirect('/admin/pelabuhan')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Hapus Data Pelabuhan
    public function hapusPelabuhan($id){
        $pelabuhan = Pelabuhan::FindOrFail($id);
        $id_user = $pelabuhan->id_user;
        $user = User::FindOrFail($id_user);
        $perencanaan = Perencanaan::where('id_user',$id_user)->first();
        $fasilitas = Fasilitas::where('id_user',$id_user)->first();
        $fasilitas_darat = FasilitasDaratPelPny::where('id_fasilitas',$fasilitas->id)->first();
        $fasilitas_perairan = FasilitasPerairanPelPny::where('id_fasilitas',$fasilitas->id)->first();
        $fasilitas_peralatan = FasilitasPeralatan::where('id_fasilitas',$fasilitas->id)->first();
        $fasilitas_sarana = FasilitasSarana::where('id_fasilitas',$fasilitas->id)->first();
        $pelabuhan->delete();
        $perencanaan->delete();
        $fasilitas->delete();
        $fasilitas_darat->delete();
        $fasilitas_perairan->delete();
        $fasilitas_peralatan->delete();
        $fasilitas_sarana->delete();
        $user->delete();
        return redirect('/admin/pelabuhan')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // Tutup Controller Pelabuhan

    // Controller Penyeberangan
    public function penyeberangan(){
        $user = $this->User();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $penyeberangan_list = DB::table('tb_penyeberangan')
                ->join('users', 'tb_penyeberangan.id_user','=','users.id')
                ->select('tb_penyeberangan.*', 'users.username', 'users.password', 'users.email')
                ->get();
            return view('layout.admin.penyeberangan', compact('penyeberangan_list', 'value', 'user'));
        }
    }

    // Tambah Data Penyeberangan
    public function tambahPenyeberangan(Request $request){
        $username = $request->username;
        $password = $request->password;
        $level_akses= $request->level_akses;
        $email = $request->email;
        $nama_penyeberangan = $request->nama_penyeberangan;
        $alamat_penyeberangan = $request->alamat_penyeberangan;
        $posisi_penyeberangan = $request->posisi_penyeberangan;

        // Simpan Data Pada tb_users
        $user = new User();
        $user->username = $username;
        $user->password =md5($password);
        $user->level_akses =$level_akses;
        $user->email = $email;

        if (User::where('username', $username)->first()){
            return redirect('/admin/penyeberangan')->with(['warning' => 'Username penyeberangan sudah terdaftar!']);
        }else{
            $user->save();
        }

        $id_user = AdminController::getUser($username);

        $perencanaan = new Perencanaan();
        $perencanaan->id_user = $id_user;

        $penyeberangan = new Penyeberangan();
        $penyeberangan->id_user = $id_user;
        $penyeberangan->nama_penyeberangan = $nama_penyeberangan;
        $penyeberangan->alamat_penyeberangan = $alamat_penyeberangan;
        $penyeberangan->posisi_penyeberangan = $posisi_penyeberangan;

        $fasilitas = new Fasilitas();
        $fasilitas->id_user = $id_user;
        if (Penyeberangan::where('id_user', $id_user)->first()){
            return redirect('/admin/penyeberangan')->with(['warning' => 'Penyeberangan sudah terdaftar!']);
        }else{
            $perencanaan->save();
            $penyeberangan->save();
            $fasilitas->save();

            $getFasilitas = Fasilitas::where('id_user', $id_user)->first();

            $fasilitas_darat = new FasilitasDaratPelPny();
            $fasilitas_darat->id_fasilitas = $getFasilitas->id;

            $fasliitas_perairan = new FasilitasPerairanPelPny();
            $fasliitas_perairan->id_fasilitas = $getFasilitas->id;

            $fasliitas_peralatan = new FasilitasPeralatan();
            $fasliitas_peralatan->id_fasilitas = $getFasilitas->id;

            $datasarana = ', , , ';
            $fasliitas_sarana = new FasilitasSarana();
            $fasliitas_sarana->id_fasilitas = $getFasilitas->id;
            $fasliitas_sarana->dlkr = $datasarana;
            $fasliitas_sarana->dlkp = $datasarana;

            $fasilitas_darat->save();
            $fasliitas_perairan->save();
            $fasliitas_peralatan->save();
            $fasliitas_sarana->save();
            return redirect('/admin/penyeberangan')->with(['succes' => 'Berhasil tambah data!']);
        }
    }

    // Edit Data Penyeberangan
    public function editPenyeberangan($id, Request $request){
        $penyeberangan = Penyeberangan::findOrFail($id);
        $user = User::findOrFail($penyeberangan->id_user);
        $user->email = $request->email;
        $penyeberangan->update($request->all());
        $user->update();
        return redirect('/admin/penyeberangan')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Hapus Data Penyeberangan
    public function hapusPenyeberangan($id){
        $penyeberangan = Penyeberangan::FindOrFail($id);
        $id_user = $penyeberangan->id_user;
        $user = User::FindOrFail($id_user);
        $perencanaan = Perencanaan::where('id_user',$id_user)->first();
        $fasilitas = Fasilitas::where('id_user',$id_user)->first();
        $fasilitas_darat = FasilitasDaratPelPny::where('id_fasilitas',$fasilitas->id)->first();
        $fasilitas_perairan = FasilitasPerairanPelPny::where('id_fasilitas',$fasilitas->id)->first();
        $fasilitas_peralatan = FasilitasPeralatan::where('id_fasilitas',$fasilitas->id)->first();
        $fasilitas_sarana = FasilitasSarana::where('id_fasilitas',$fasilitas->id)->first();
        $penyeberangan->delete();
        $perencanaan->delete();
        $fasilitas->delete();
        $fasilitas_darat->delete();
        $fasilitas_perairan->delete();
        $fasilitas_peralatan->delete();
        $fasilitas_sarana->delete();
        $user->delete();
        return redirect('/admin/penyeberangan')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // Tutup Controller Penyeberangan

    // Controller Tuks/Tersus
    public function tukstersus(){
        $user = $this->User();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $tukstersus_list = DB::table('tb_tukstersus')
                ->join('users', 'tb_tukstersus.id_user','=','users.id')
                ->select('tb_tukstersus.*', 'users.username', 'users.password', 'users.email')
                ->get();
            return view('layout.admin.tukstersus', compact('tukstersus_list', 'value', 'user'));
        }
    }

    // Tambah Data Pelabuhan
    public function tambahTuksTersus(Request $request){
        $username = $request->username;
        $password = $request->password;
        $level_akses= $request->level_akses;
        $email= $request->email;
        $nama_perusahaan = $request->nama_perusahaan;
        $alamat_perusahaan = $request->alamat_perusahaan;
        $bidang_usaha = $request->bidang_usaha;
        $npwp = $request->npwp;
        $nib = $request->nib;
        $nama_pj = $request->nama_pj;
        $posisi_perusahaan = $request->posisi_perusahaan;

        $user = new User();
        $user->username =$username;
        $user->password =md5($password);
        $user->level_akses =$level_akses;
        $user->email =$email;

        if (User::where('username', $username)->first()){
            return redirect('/admin/tukstersus')->with(['warning' => 'Username perusahaan sudah terdaftar!']);
        }else{
            $user->save();
        }

        $id_user = AdminController::getUser($username);

        $perencanaan = new Perencanaan();
        $perencanaan->id_user = $id_user;

        $tukstersus = new TuksTersus();
        $tukstersus->id_user = $id_user;
        $tukstersus->nama_perusahaan = $nama_perusahaan;
        $tukstersus->alamat_perusahaan = $alamat_perusahaan;
        $tukstersus->bidang_usaha = $bidang_usaha;
        $tukstersus->npwp = $npwp;
        $tukstersus->nib = $nib;
        $tukstersus->nama_pj = $nama_pj;
        $tukstersus->posisi_perusahaan = $posisi_perusahaan;

        $fasilitas = new Fasilitas();
        $fasilitas->id_user = $id_user;
        if (TuksTersus::where('id_user', $id_user)->first()){
            return redirect('/admin/tukstersus')->with(['warning' => 'Perusahaan sudah terdaftar!']);
        }else{
            $perencanaan->save();
            $tukstersus->save();

            $fasilitas->save();

            $getFasilitas = Fasilitas::where('id_user', $id_user)->first();

            $fasilitas_darat = new FasilitasDaratTuksTersus();
            $fasilitas_darat->id_fasilitas = $getFasilitas->id;

            $fasliitas_perairan = new FasilitasPerairanTuksTersus();
            $fasliitas_perairan->id_fasilitas = $getFasilitas->id;

            $fasliitas_peralatan = new FasilitasPeralatan();
            $fasliitas_peralatan->id_fasilitas = $getFasilitas->id;

            $datasarana = ', , , ';
            $fasliitas_sarana = new FasilitasSarana();
            $fasliitas_sarana->id_fasilitas = $getFasilitas->id;
            $fasliitas_sarana->dlkr = $datasarana;
            $fasliitas_sarana->dlkp = $datasarana;

            $fasilitas_darat->save();
            $fasliitas_perairan->save();
            $fasliitas_peralatan->save();
            $fasliitas_sarana->save();
            return redirect('/admin/tukstersus')->with(['succes' => 'Berhasil tambah data!']);
        }
    }

    // Edit Data TuksTersus
    public function editTuksTersus($id, Request $request){
        $tukstersus = TuksTersus::findOrFail($id);
        $user = User::findOrFail($tukstersus->id_user);
        $user->email = $request->email;
        $tukstersus->update($request->all());
        $user->update();
        return redirect('/admin/tukstersus')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Hapus Data TuksTersus
    public function hapusTuksTersus($id){
        $tukstersus = TuksTersus::FindOrFail($id);
        $id_user = $tukstersus->id_user;
        $user = User::FindOrFail($id_user);
        $perencanaan = Perencanaan::where('id_user',$id_user)->first();
        $fasilitas = Fasilitas::where('id_user',$id_user)->first();
        $fasilitas_darat = FasilitasDaratTuksTersus::where('id_fasilitas',$fasilitas->id)->first();
        $fasilitas_perairan = FasilitasPerairanTuksTersus::where('id_fasilitas',$fasilitas->id)->first();
        $fasilitas_peralatan = FasilitasPeralatan::where('id_fasilitas',$fasilitas->id)->first();
        $fasilitas_sarana = FasilitasSarana::where('id_fasilitas',$fasilitas->id)->first();
        $tukstersus->delete();
        $perencanaan->delete();
        $fasilitas->delete();
        $fasilitas_darat->delete();
        $fasilitas_perairan->delete();
        $fasilitas_peralatan->delete();
        $fasilitas_sarana->delete();
        $user->delete();
        return redirect('/admin/tukstersus')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // Tutup Controller Tuks/Tersus

    // Controller KegiatanPenunjang
    public function kegiatanpenunjang(){
        $user = $this->User();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $kegiatanpenunjang_list = DB::table('tb_kegiatanpenunjang')
                ->join('users', 'tb_kegiatanpenunjang.id_user','=','users.id')
                ->select('tb_kegiatanpenunjang.*', 'users.username', 'users.password', 'users.email')
                ->get();
            return view('layout.admin.kegiatanpenunjang', compact('kegiatanpenunjang_list', 'value', 'user'));
        }
    }

    // Tambah Kegiatan Penunjang
    public function tambahKegiatanPenunjang(Request $request){
        $username = $request->username;
        $password = $request->password;
        $level_akses = $request->level_akses;
        $email = $request->email;
        $nama_perusahaan = $request->nama_perusahaan;
        $alamat_perusahaan = $request->alamat_perusahaan;
        $bidang_usaha = $request->bidang_usaha;
        $nama_pj = $request->nama_pj;
        $alamat_pj = $request->alamat_pj;
        $nomor_izin_usaha = $request->nomor_izin_usaha;
        $tgl_izin_usaha = $request->tgl_izin_usaha;
        $npwp = $request->npwp;

        $user = new User();
        $user->username =$username;
        $user->password =md5($password);
        $user->level_akses =$level_akses;
        $user->email = $email;

        if (User::where('username', $username)->first()){
            return redirect('/admin/tukstersus')->with(['warning' => 'Username perusahaan sudah terdaftar!']);
        }else{
            $user->save();
        }

        $id_user = AdminController::getUser($username);

        $kegiatanpenunjang = new KegiatanPenunjang();
        $kegiatanpenunjang->id_user = $id_user;
        $kegiatanpenunjang->nama_perusahaan = $nama_perusahaan;
        $kegiatanpenunjang->alamat_perusahaan = $alamat_perusahaan;
        $kegiatanpenunjang->bidang_usaha = $bidang_usaha;
        $kegiatanpenunjang->nama_pj = $nama_pj;
        $kegiatanpenunjang->alamat_pj = $alamat_pj;
        $kegiatanpenunjang->nomor_izin_usaha = $nomor_izin_usaha;
        $kegiatanpenunjang->tgl_izin_usaha = $tgl_izin_usaha;
        $kegiatanpenunjang->npwp = $npwp;
        if (TuksTersus::where('id_user', $id_user)->first()){
            return redirect('/admin/kegiatanpenunjang')->with(['warning' => 'Perusahaan sudah terdaftar!']);
        }else{
            $kegiatanpenunjang->save();
            return redirect('/admin/kegiatanpenunjang')->with(['succes' => 'Berhasil tambah data!']);
        }
    }

    // Edit Data Kegiatan Penunjang
    public function editKegiatanPenunjang($id, Request $request){
        $kegiatanpenunjang = KegiatanPenunjang::findOrFail($id);
        $user = User::findOrFail($kegiatanpenunjang->id_user);
        $user->email = $request->email;
        $kegiatanpenunjang->update($request->all());
        $user->update();
        return redirect('/admin/kegiatanpenunjang')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Hapus Data Kegiatan Penunjang
    public function hapusKegiatanPenunjang($id){
        $kegiatanpenunjang = KegiatanPenunjang::FindOrFail($id);
        $id_user = $kegiatanpenunjang->id_user;
        $user = User::FindOrFail($id_user);
        $kegiatanpenunjang->delete();
        $user->delete();
        return redirect('/admin/kegiatanpenunjang')->with(['succes' => 'Berhasil Hapus Data!']);
    }
    // Tutup Controller KegiatanPenunjang

    // Controller Surat Masuk
    public function suratMasuk(){
        $user = $this->User();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $surat_list = DB::table('tb_surat')
                ->where('id_tujuan', $value->id)
                ->join('users', 'tb_surat.id_user','=','users.id')
                ->select('tb_surat.*', 'users.email')
                ->get();
            return view('layout.admin.suratmasuk', compact('surat_list', 'value', 'user'));
        }
    }

    // Controller Surat Keluar
    public function suratKeluar(){
        $user = $this->User();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $tujuan_list = User::all();
            $surat_list = DB::table('tb_surat')
                ->where('id_user', $value->id)
                ->join('users', 'tb_surat.id_tujuan','=','users.id')
                ->select('tb_surat.*', 'users.email')
                ->get();
            return view('layout.admin.suratkeluar', compact('surat_list', 'value', 'user', 'tujuan_list'));
        }
    }

    // Tambah Surat
    public function tambahSurat(Request $request){

        $user = $this->User();
        $tujuan = User::where('email', $request->email)->first();
        $surat = new Surat();
        $surat->id_user = $user->id_user;
        $surat->id_tujuan = $tujuan->id;
        $surat->judul = $request->judul;
        $surat->isi = $request->isi;
        $surat->file = $request->file;
        $surat->created_at = Carbon::now();
        $surat->updated_at = Carbon::now();

        $file = $request->file('file');

        // nama file
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';

        // ekstensi file
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';

        // real path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';

        // ukuran file
        echo 'File Size: '.$file->getSize();
        echo '<br>';

        // tipe mime
        echo 'File Mime Type: '.$file->getMimeType();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'file_surat';

        // upload file
        $file->move($tujuan_upload, Carbon::now()->format('d-m-Y-H-i-s').$file->getClientOriginalName());

        $surat->file = Carbon::now()->format('d-m-Y-H-i-s').$file->getClientOriginalName();
        $surat->save();
        return redirect('/admin/suratKeluar')->with(['succes' => 'Berhasil mengirim surat!']);
    }

    // Hapus Surat
    public function hapusSurat($id){
        $surat = Surat::FindOrFail($id);
        File::delete('file_surat/'.$surat->file);
        $surat->delete();
        return redirect('/admin/suratKeluar')->with(['succes' => 'Berhasil Hapus Surat!']);
    }

    // View Surat
    public function viewSurat($name){
        $pathToFile = public_path().'/file_surat/'.$name;
        return response()->file($pathToFile);
    }
}
