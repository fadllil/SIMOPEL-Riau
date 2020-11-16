<?php

namespace App\Http\Controllers;

use App\BongkarMuatPelabuhan;
use App\FasilitasPelPny;
use App\KegiatanPenunjang;
use App\KegiatanPenunjangBongkarMuat;
use App\KegiatanPenunjangPengurusanTransportasi;
use App\KegiatanPenunjangPerla;
use App\OperasionalPelabuhan;
use App\Pelabuhan;
use App\Perencanaan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class KegiatanPenunjangController extends Controller
{
    public function getUser(){
        $value = Session::get('user');
        $user = KegiatanPenunjang::where('id_user', $value->id)->first();
        return $user;
    }

    // Home Bongkar Muat
    public function homeBongkarMuat(){
        $user = $this->getUser();
        return view('layout.kegiatanpenunjang.bongkarmuat.home', compact('user'));
    }

    // Home Pelayaran Rakyat
    public function homePelayaranRakyat(){
        $user = $this->getUser();
        return view('layout.kegiatanpenunjang.pelayaranrakyat.home', compact('user'));
    }

    // Home Pengurusan Transportasi
    public function homePengurusanTransportasi(){
        $user = $this->getUser();
        return view('layout.kegiatanpenunjang.pengurusantransportasi.home', compact('user'));
    }

    // View Profil Perusahaan Bongkar Muat
    public function profilBongkarMuat(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            return view('layout.kegiatanpenunjang.bongkarmuat.profil', compact('user', 'value'));
        }
    }

    // View Profil Perusahaan Pelayaran Rakyat
    public function profilPelayaranRakyat(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            return view('layout.kegiatanpenunjang.pelayaranrakyat.profil', compact('user', 'value'));
        }
    }

    // View Profil Perusahaan Pengurusan Transportasi
    public function profilPengurusanTransportasi(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            return view('layout.kegiatanpenunjang.pengurusantransportasi.profil', compact('user', 'value'));
        }
    }

    // Edit Data Perusahaan
    public function editPerusahaan($id, Request $request){
        $perusahaan = KegiatanPenunjang::findOrFail($id);
        $perusahaan->update($request->all());
        $user = $this->getUser();
        if ($user->bidang_usaha == 'Bongkar Muat'){
            return redirect('/kegiatanpenunjang/bongkarmuat/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
        }else if ($user->bidang_usaha == 'Pelayaran Rakyat'){
            return redirect('/kegiatanpenunjang/pelayaranrakyat/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
        }else if ($user->bidang_usaha == 'Pengurusan Transportasi'){
            return redirect('/kegiatanpenunjang/pengurusantransportasi/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
        }
    }

    // View Perjalanan Kapal
    public function perla(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $perla_list = KegiatanPenunjangPerla::where('id_perusahaan', $user->id)->get();
            return view('layout.kegiatanpenunjang.pelayaranrakyat.perla', compact('user', 'value', 'perla_list'));
        }
    }

    // Tambah Perjalanan Kapal
    public function tambahPerla(Request $request){
        $user = $this->getUser();
        $perla = new KegiatanPenunjangPerla();
        $perla->id_perusahaan = $user->id;
        $perla->nama_kapal = $request->nama_kapal;
        $perla->bendera = $request->bendera;
        $perla->type = $request->type;
        $perla->kec_ekonomis = $request->kec_ekonomis;
        $perla->status_trayek = $request->status_trayek;
        $perla->pelabuhan_asal = $request->pelabuhan_asal;
        $perla->tb_tgl = $request->tb_tgl;
        $perla->tb_jam = $request->tb_jam;
        $perla->bk_tgl = $request->bk_tgl;
        $perla->bk_jam = $request->bk_jam;
        $perla->jarak = $request->jarak;
        $perla->berlayar_hari = $request->berlayar_hari;
        $perla->berlayar_jam = $request->berlayar_jam;
        $perla->berlabuh_hari = $request->berlabuh_hari;
        $perla->berlabuh_jam = $request->berlabuh_jam;
        $perla->bm_mulai = $request->bm_mulai;
        $perla->bm_selesai = $request->bm_selesai;
        $perla->pelabuhan_tujuan = $request->pelabuhan_tujuan;
        $perla->b_m = $request->b_m;
        $perla->berat = $request->berat;
        $perla->ukuran = $request->ukuran;
        $perla->penumpang = $request->penumpang;
        $perla->hewan = $request->hewan;
        $perla->jenis_barang = $request->jenis_barang;
        $perla->kemasan = $request->kemasan;
        $perla->save();
        return redirect('/kegiatanpenunjang/perla')->with(['succes' => 'Berhasil tambah data!']);
    }

    // Edit Data Perjalanan Kapal
    public function editPerla($id, Request $request){
        $perla = KegiatanPenunjangPerla::findOrFail($id);
        $perla->update($request->all());
        return redirect('/kegiatanpenunjang/perla')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Hapus Data Perjalanan Kapal
    public function hapusPerla($id){
        $perla = KegiatanPenunjangPerla::FindOrFail($id);
        $perla->delete();
        return redirect('/kegiatanpenunjang/perla')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // pdfBulanan Data Perjalanan Kapal
    public function pdfBulananPerla(Request $request){
        $user = $this->getUser();
        $dates = "01-".$request->pickbulan;
        $tgl = new Carbon($dates);
        $tgl->format('Y-m-d');
        $perla_list = KegiatanPenunjangPerla::where('id_perusahaan' , $user->id)
            ->whereYear('tb_tgl', '=', $tgl)
            ->whereMonth('tb_tgl', '=', $tgl)
            ->orderBy('tb_tgl', 'asc')
            ->get();

        $pdf = PDF::loadview('layout.kegiatanpenunjang.pelayaranrakyat.pdfBulananPerla',compact('perla_list','user', 'tgl'));
        $pdf->setPaper(array(0,0,841.89,1190.55), 'landscape');
        return $pdf->stream();
    }

    // pdfBulanan Data Perjalanan Kapal
    public function pdfTahunanPerla(Request $request){
        $user = $this->getUser();
        $data = [];
        $PTDN = [];
        $HewanTDN = [];
        $PetiTDN = [];
        $JumlahTDN = [];
        $BarangTDN = [];
        $VolumeTDN = [];
        $PMDN = [];
        $HewanMDN = [];
        $PetiMDN = [];
        $JumlahMDN = [];
        $BarangMDN = [];
        $VolumeMDN = [];
        $PTLN = [];
        $HewanTLN = [];
        $PetiTLN = [];
        $JumlahTLN = [];
        $BarangTLN = [];
        $VolumeTLN = [];
        $PMLN = [];
        $HewanMLN = [];
        $PetiMLN = [];
        $JumlahMLN = [];
        $BarangMLN = [];
        $VolumeMLN = [];
        $bulan = 12;
        for ($i = 1; $i <= $bulan; $i++){
            $dates = "01-".$i.'-'.$request->picktahun;
            $tgl = new Carbon($dates);
            $tgl->format('Y-m-d');
            $bongkarmuat = KegiatanPenunjangPerla::where('id_perusahaan' , $user->id)
                ->whereYear('adn_b_tgl', '=', $tgl)
                ->whereMonth('adn_b_tgl', '=', $tgl)
                ->get();
            $tambahptdn = 0;
            $tambahhewantdn = 0;
            $tambahpetitdn = 0;
            $tambahjumlahtdn = 0;
            $tambahbarangtdn = 0;
            $tambahvolumetdn = 0;
            $tambahpmdn = 0;
            $tambahhewanmdn = 0;
            $tambahpetimdn = 0;
            $tambahjumlahmdn = 0;
            $tambahbarangmdn = 0;
            $tambahvolumemdn = 0;
            $tambahptln = 0;
            $tambahhewantln = 0;
            $tambahpetitln = 0;
            $tambahjumlahtln = 0;
            $tambahbarangtln = 0;
            $tambahvolumetln = 0;
            $tambahpmln = 0;
            $tambahhewanmln = 0;
            $tambahpetimln = 0;
            $tambahjumlahmln = 0;
            $tambahbarangmln = 0;
            $tambahvolumemln = 0;
            foreach ($bongkarmuat as $ope){
                $tambahptdn = $ope->adn_b_pt + $tambahptdn;
                $tambahhewantdn = $ope->adn_b_hewan + $tambahhewantdn;
                $tambahpetitdn = $ope->adn_b_peti + $tambahpetitdn;
                $tambahjumlahtdn = $ope->adn_b_jumlah + $tambahjumlahtdn;
                $tambahbarangtdn = $ope->adn_b_barang + $tambahbarangtdn;
                $tambahvolumetdn = $ope->adn_b_volume + $tambahvolumetdn;
                $tambahpmdn = $ope->adn_m_pn + $tambahpmdn;
                $tambahhewanmdn = $ope->adn_m_hewan + $tambahhewanmdn;
                $tambahpetimdn = $ope->adn_m_peti + $tambahpetimdn;
                $tambahjumlahmdn = $ope->adn_m_jumlah + $tambahjumlahmdn;
                $tambahbarangmdn = $ope->adn_m_barang + $tambahbarangmdn;
                $tambahvolumemdn = $ope->adn_m_volume + $tambahvolumemdn;
                $tambahptln = $ope->aln_b_pt + $tambahptln;
                $tambahhewantln = $ope->aln_b_hewan + $tambahhewantln;
                $tambahpetitln = $ope->aln_b_peti + $tambahpetitln;
                $tambahjumlahtln = $ope->aln_b_jumlah + $tambahjumlahtln;
                $tambahbarangtln = $ope->aln_b_barang + $tambahbarangtln;
                $tambahvolumetln = $ope->aln_b_volume + $tambahvolumetln;
                $tambahpmln = $ope->aln_m_pn + $tambahpmln;
                $tambahhewanmln = $ope->aln_m_hewan + $tambahhewanmln;
                $tambahpetimln = $ope->aln_m_peti + $tambahpetimln;
                $tambahjumlahmln = $ope->aln_m_jumlah + $tambahjumlahmln;
                $tambahbarangmln = $ope->aln_m_barang + $tambahbarangmln;
                $tambahvolumemln = $ope->aln_m_volume + $tambahvolumemln;
            }
            array_push( $data, $bongkarmuat);
            array_push( $PTDN, $tambahptdn);
            array_push( $HewanTDN, $tambahhewantdn);
            array_push( $PetiTDN, $tambahpetitdn);
            array_push( $JumlahTDN, $tambahjumlahtdn);
            array_push( $BarangTDN, $tambahbarangtdn);
            array_push( $VolumeTDN, $tambahvolumetdn);
            array_push( $PMDN, $tambahpmdn);
            array_push( $HewanMDN, $tambahhewanmdn);
            array_push( $PetiMDN, $tambahpetimdn);
            array_push( $JumlahMDN, $tambahjumlahmdn);
            array_push( $BarangMDN, $tambahbarangmdn);
            array_push( $VolumeMDN, $tambahvolumemdn);
            array_push( $PTLN, $tambahptln);
            array_push( $HewanTLN, $tambahhewantln);
            array_push( $PetiTLN, $tambahpetitln);
            array_push( $JumlahTLN, $tambahjumlahtln);
            array_push( $BarangTLN, $tambahbarangtln);
            array_push( $VolumeTLN, $tambahvolumetln);
            array_push( $PMLN, $tambahpmln);
            array_push( $HewanMLN, $tambahhewanmln);
            array_push( $PetiMLN, $tambahpetimln);
            array_push( $JumlahMLN, $tambahjumlahmln);
            array_push( $BarangMLN, $tambahbarangmln);
            array_push( $VolumeMLN, $tambahvolumemln);
        }
        $pdf = PDF::loadview('layout.pdf.pdfTahunanPerla',compact('data', 'user',
            'tgl', 'PTDN', 'HewanTDN', 'PetiTDN', 'JumlahTDN', 'BarangTDN', 'VolumeTDN',
            'PMDN', 'HewanMDN', 'PetiMDN', 'JumlahMDN', 'BarangMDN', 'VolumeMDN',
            'PTLN', 'HewanTLN', 'PetiTLN', 'JumlahTLN', 'BarangTLN', 'VolumeTLN',
            'PMLN', 'HewanMLN', 'PetiMLN', 'JumlahMLN', 'BarangMLN', 'VolumeMLN'));
        $pdf->setPaper(array(0,0,841.89,1190.55), 'landscape');
        return $pdf->stream();
    }

    // View Bongkar Muat
    public function bongkarMuat(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $bongkarmuat_list = KegiatanPenunjangBongkarMuat::where('id_perusahaan', $user->id)->get();
            return view('layout.kegiatanpenunjang.bongkarmuat.bongkarmuat', compact('user', 'value', 'bongkarmuat_list'));
        }
    }

    // Tambah Bongkar Muat
    public function tambahBongkarMuat(Request $request){
        $user = $this->getUser();
        $bongkarmuat = new KegiatanPenunjangBongkarMuat();
        $bongkarmuat->id_perusahaan = $user->id;
        $bongkarmuat->nama_kapal = $request->nama_kapal;
        $bongkarmuat->bendera = $request->bendera;
        $bongkarmuat->ukuran = $request->ukuran;
        $bongkarmuat->nama_agen = $request->nama_agen;
        $bongkarmuat->jumlah_bm = $request->jumlah_bm;
        $bongkarmuat->mulai = $request->mulai;
        $bongkarmuat->selesai = $request->selesai;
        $bongkarmuat->jumlah_buruh = $request->jumlah_buruh;
        $bongkarmuat->asal_barang = $request->asal_barang;
        $bongkarmuat->tujuan = $request->tujuan;
        $bongkarmuat->jenis = $request->jenis;
        $bongkarmuat->penunjukan = $request->penunjukan;
        $bongkarmuat->ket = $request->ket;
        $bongkarmuat->save();
        return redirect('/kegiatanpenunjang/bongkarmuat')->with(['succes' => 'Berhasil tambah data!']);
    }

    // Edit Data Perjalanan Kapal
    public function editBongkarMuat($id, Request $request){
        $bongkarmuat = KegiatanPenunjangBongkarMuat::findOrFail($id);
        $bongkarmuat->update($request->all());
        return redirect('/kegiatanpenunjang/bongkarmuat')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Hapus Data Perjalanan Kapal
    public function hapusBongkarMuat($id){
        $bongkarmuat = KegiatanPenunjangBongkarMuat::FindOrFail($id);
        $bongkarmuat->delete();
        return redirect('/kegiatanpenunjang/bongkarmuat')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // pdfBulanan Data Bongkar Muat
    public function pdfBulananBongkarMuat(Request $request){
        $user = $this->getUser();
        $dates = "01-".$request->pickbulan;
        $tgl = new Carbon($dates);
        $tgl->format('Y-m-d');
        $bongkarmuat_list = KegiatanPenunjangBongkarMuat::where('id_perusahaan' , $user->id)
            ->whereYear('mulai', '=', $tgl)
            ->whereMonth('mulai', '=', $tgl)
            ->orderBy('mulai', 'asc')
            ->get();

        $pdf = PDF::loadview('layout.kegiatanpenunjang.bongkarmuat.pdfBulananBongkarMuat',compact('bongkarmuat_list','user', 'tgl'));
        $pdf->setPaper(array(0,0,595.28,841.89), 'landscape');
        return $pdf->stream();
    }

    // pdfTahunan Data Bongkar Muat
    public function pdfTahunanBongkarMuat(Request $request){
        $user = $this->getUser();
        $data = [];
        $JumlahBM = [];
        $JumlahBuruh = [];
        $bulan = 12;
        for ($i = 1; $i <= $bulan; $i++){
            $dates = "01-".$i.'-'.$request->picktahun;
            $tgl = new Carbon($dates);
            $tgl->format('Y-m-d');
            $bongkarmuat = KegiatanPenunjangBongkarMuat::where('id_perusahaan' , $user->id)
                ->whereYear('mulai', '=', $tgl)
                ->whereMonth('mulai', '=', $tgl)
                ->get();
            $tambahjumlahbm = 0;
            $tambahjumlahburuh = 0;
            foreach ($bongkarmuat as $ope){
                $tambahjumlahbm = $ope->jumlah_bm + $tambahjumlahbm;
                $tambahjumlahburuh = $ope->jumlah_buruh + $tambahjumlahburuh;
            }
            array_push( $data, $bongkarmuat);
            array_push( $JumlahBM, $tambahjumlahbm);
            array_push( $JumlahBuruh, $tambahjumlahburuh);
        }
        $pdf = PDF::loadview('layout.kegiatanpenunjang.bongkarmuat.pdfTahunanBongkarMuat',compact('data', 'user',
            'tgl', 'JumlahBM', 'JumlahBuruh'));
        $pdf->setPaper(array(0,0,595.28,841.89), 'landscape');
        return $pdf->stream();
    }

    // View Pengurusan Transportasi
    public function pengurusanTransportasi(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $pengurusantransportasi_list = KegiatanPenunjangPengurusanTransportasi::where('id_perusahaan', $user->id)->get();
            return view('layout.kegiatanpenunjang.pengurusantransportasi.pengurusantransportasi', compact('user', 'value', 'pengurusantransportasi_list'));
        }
    }

    // Tambah Pengurusan Transportasi
    public function tambahPengurusanTransportasi(Request $request){
        $user = $this->getUser();
        $pengurusan = new KegiatanPenunjangPengurusanTransportasi();
        $pengurusan->id_perusahaan = $user->id;
        $pengurusan->tanggal = $request->tanggal;
        $pengurusan->nama_barang = $request->nama_barang;
        $pengurusan->nama_kapal = $request->nama_kapal;
        $pengurusan->jenis = $request->jenis;
        $pengurusan->import_tonase = $request->import_tonase;
        $pengurusan->import_pib = $request->import_pib;
        $pengurusan->in_ap_tonase = $request->in_ap_tonase;
        $pengurusan->in_ap_pmb = $request->in_ap_pmb;
        $pengurusan->ekspor_tonase = $request->ekspor_tonase;
        $pengurusan->ekspor_peb	 = $request->ekspor_peb	;
        $pengurusan->uit_ap_tonase = $request->uit_ap_tonase;
        $pengurusan->uit_ap_pmb = $request->uit_ap_pmb;
        $pengurusan->jumlah_tonase = $request->jumlah_tonase;
        $pengurusan->jumlah_in_uit = $request->jumlah_in_uit;
        $pengurusan->save();
        return redirect('/kegiatanpenunjang/pengurusantransportasi')->with(['succes' => 'Berhasil tambah data!']);
    }

    // Edit Data Pengurusan Transportasi
    public function editPengurusanTransportasi($id, Request $request){
        $pengurusan = KegiatanPenunjangPengurusanTransportasi::findOrFail($id);
        $pengurusan->update($request->all());
        return redirect('/kegiatanpenunjang/pengurusantransportasi')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Hapus Data Pengurusan Trasportasi
    public function hapusPengurusanTransportasi($id){
        $pengurusan = KegiatanPenunjangPengurusanTransportasi::FindOrFail($id);
        $pengurusan->delete();
        return redirect('/kegiatanpenunjang/pengurusantransportasi')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // pdfBulanan Data Bongkar Muat
    public function pdfBulananPengurusanTransportasi(Request $request){
        $user = $this->getUser();
        $dates = "01-".$request->pickbulan;
        $tgl = new Carbon($dates);
        $tgl->format('Y-m-d');
        $pengurusan_list = KegiatanPenunjangPengurusanTransportasi::where('id_perusahaan' , $user->id)
            ->whereYear('tanggal', '=', $tgl)
            ->whereMonth('tanggal', '=', $tgl)
            ->orderBy('tanggal', 'asc')
            ->get();

        $pdf = PDF::loadview('layout.kegiatanpenunjang.pengurusantransportasi.pdfBulananPengurusanTransportasi',
            compact(
            'pengurusan_list','user', 'tgl'
            ));
        $pdf->setPaper(array(0,0,595.28,841.89), 'landscape');
        return $pdf->stream();
    }

    // pdfBulanan Data Pengurusan Transportasi
    public function pdfTahunanPengurusanTransportasi(Request $request){
        $user = $this->getUser();
        $data = [];
        $JumlahImTonase = [];
        $JumlahImPIB = [];
        $JumlahImAPTonase = [];
        $JumlahImAPPMB = [];
        $JumlahEksTonase = [];
        $JumlahEksPEB = [];
        $JumlahEksAPTonase = [];
        $JumlahEksAPPMB = [];
        $JumlahTonase = [];
        $JumlahInUit = [];
        $bulan = 12;
        for ($i = 1; $i <= $bulan; $i++){
            $dates = "01-".$i.'-'.$request->picktahun;
            $tgl = new Carbon($dates);
            $tgl->format('Y-m-d');
            $pengurusan_list = KegiatanPenunjangPengurusanTransportasi::where('id_perusahaan' , $user->id)
                ->whereYear('tanggal', '=', $tgl)
                ->whereMonth('tanggal', '=', $tgl)
                ->get();
            $tambahimtonase = 0;
            $tambahimpib = 0;
            $tambahimaptonase = 0;
            $tambahimappmb = 0;
            $tambahekstonase = 0;
            $tambahekspeb = 0;
            $tambaheksaptonase = 0;
            $tambaheksappmb = 0;
            $tambahjumlahtonase = 0;
            $tambahjumlahinuit = 0;
            foreach ($pengurusan_list as $pengurusan){
                $tambahimtonase = $pengurusan->import_tonase + $tambahimtonase;
                $tambahimpib = $pengurusan->import_pib + $tambahimpib;
                $tambahimaptonase = $pengurusan->in_ap_tonase + $tambahimaptonase;
                $tambahimappmb = $pengurusan->in_ap_pmb + $tambahimappmb;
                $tambahekstonase = $pengurusan->ekspor_tonase + $tambahekstonase;
                $tambahekspeb = $pengurusan->ekspor_peb + $tambahekspeb;
                $tambaheksaptonase = $pengurusan->uit_ap_tonase + $tambaheksaptonase;
                $tambaheksappmb = $pengurusan->uit_ap_pmb + $tambaheksappmb;
                $tambahjumlahtonase = $pengurusan->jumlah_tonase + $tambahjumlahtonase;
                $tambahjumlahinuit = $pengurusan->jumlah_in_uit + $tambahjumlahinuit;
            }
            array_push( $data, $pengurusan_list);
            array_push( $JumlahImTonase, $tambahimtonase);
            array_push( $JumlahImPIB, $tambahimpib);
            array_push( $JumlahImAPTonase, $tambahimaptonase);
            array_push( $JumlahImAPPMB, $tambahimappmb);
            array_push( $JumlahEksTonase, $tambahekstonase);
            array_push( $JumlahEksPEB, $tambahekspeb);
            array_push( $JumlahEksAPTonase, $tambaheksaptonase);
            array_push( $JumlahEksAPPMB, $tambaheksappmb);
            array_push( $JumlahTonase, $tambahjumlahtonase);
            array_push( $JumlahInUit, $tambahjumlahinuit);
        }
        $pdf = PDF::loadview('layout.kegiatanpenunjang.pengurusantransportasi.pdfTahunanPengurusanTransportasi',compact('data', 'user',
            'tgl', 'JumlahImTonase', 'JumlahImPIB', 'JumlahImAPTonase', 'JumlahImAPPMB',
            'JumlahEksTonase', 'JumlahEksPEB', 'JumlahEksAPTonase', 'JumlahEksAPPMB',
            'JumlahTonase', 'JumlahInUit'
        ));
        $pdf->setPaper(array(0,0,612.00,1008.00), 'landscape');
        return $pdf->stream();
    }
}
