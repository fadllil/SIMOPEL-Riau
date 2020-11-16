<?php

namespace App\Http\Controllers;

use App\BongkarMuatPelabuhan;
use App\BongkarMuatPenyeberangan;
use App\Fasilitas;
use App\FasilitasDaratPelPny;
use App\FasilitasPerairanPelPny;
use App\FasilitasPeralatan;
use App\FasilitasSarana;
use App\OperasionalPelabuhan;
use App\OperasionalPenyeberangan;
use App\PajakRetribusiDaerah;
use App\Pelabuhan;
use App\PenjualanPasMasuk;
use App\Penyeberangan;
use App\Perencanaan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class PenyeberanganController extends Controller
{

    public function getUser(){
        $value = Session::get('user');
        $user = Penyeberangan::where('id_user', $value->id)->first();
        return $user;
    }

    public function home(){
        $user = $this->getUser();
        return view('layout.penyeberangan.home', compact('user'));
    }

    // View Profil Penyeberangan
    public function profil(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $penyeberangan = Penyeberangan::where('id_user', $value->id)->first();
            $perencanaan = Perencanaan::where('id_user', $value->id)->first();
            $fasilitas = Fasilitas::where('id_user', $value->id)->first();
            $fasilitas_darat = FasilitasDaratPelPny::where('id_fasilitas', $fasilitas->id)->first();
            $fasilitas_perairan = FasilitasPerairanPelPny::where('id_fasilitas', $fasilitas->id)->first();
            $fasilitas_peralatan = FasilitasPeralatan::where('id_fasilitas', $fasilitas->id)->first();
            $fasilitas_sarana = FasilitasSarana::where('id_fasilitas', $fasilitas->id)->first();
            $dlkr = [];
            $dlkp = [];
            foreach (explode(', ', $fasilitas_sarana->dlkr) as $a) {
                array_push($dlkr, $a);
            }
            foreach (explode(', ', $fasilitas_sarana->dlkp) as $b) {
                array_push($dlkp, $b);
            }
            return view('layout.penyeberangan.profil', compact('penyeberangan', 'perencanaan', 'fasilitas', 'value',
                'user', 'fasilitas_darat', 'fasilitas_perairan', 'fasilitas_peralatan',
                'fasilitas_sarana', 'dlkr', 'dlkp'));
        }
    }

    // Edit Data Pelabuhan
    public function editPenyeberangan($id, Request $request){
        $penyeberangan = Penyeberangan::findOrFail($id);
        $penyeberangan->update($request->all());
        return redirect('/penyeberangan/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Perencanaan
    public function editPerencanaan($id, Request $request){
        $perencanaan = Perencanaan::findOrFail($id);
        $perencanaan->update($request->all());
        return redirect('/penyeberangan/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Faslitas Darat
    public function editFasilitasDarat($id, Request $request){
        $fasilitas = FasilitasDaratPelPny::findOrFail($id);
        $fasilitas->update($request->all());
        return redirect('/penyeberangan/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Faslitas Perairan
    public function editFasilitasPerairan($id, Request $request){
        $fasilitas = FasilitasPerairanPelPny::findOrFail($id);
        $fasilitas->update($request->all());
        return redirect('/penyeberangan/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Faslitas DLKR DLKP
    public function editFasilitasDLKRDLKP($id, Request $request){
        $fasilitas = FasilitasSarana::findOrFail($id);
        $dlkr = [];
        $dlkp = [];

        foreach (explode(', ', $fasilitas->dlkr) as $a) {
            array_push($dlkr, $a);
        }
        foreach (explode(', ', $fasilitas->dlkp) as $b) {
            array_push($dlkp, $b);
        }

        for ($i = 0; $i < count($dlkr) ; $i++){
            $dlkr[$i] = $request->dlkr[$i];
            $dlkp[$i] = $request->dlkp[$i];
        }

        $fasilitas->dlkr = implode(', ', $dlkr);
        $fasilitas->dlkp = implode(', ', $dlkp);
        $fasilitas->update();
        return redirect('/penyeberangan/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Faslitas Peralatan
    public function editFasilitasPeralatan($id, Request $request){
        $fasilitas = FasilitasPeralatan::findOrFail($id);
        $fasilitas->update($request->all());
        return redirect('/penyeberangan/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Faslitas Sarana
    public function editFasilitasSarana($id, Request $request){
        $fasilitas = FasilitasSarana::findOrFail($id);
        $fasilitas->update($request->all());
        return redirect('/penyeberangan/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Data Operasional
    public function dataoperasional(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $operasional_list = OperasionalPenyeberangan::where('id_penyeberangan', $user->id)->get();
            return view('layout.penyeberangan.dataoperasional', compact('operasional_list', 'value', 'user'));
        }
    }

    // Tambah Data Operasional
    public function tambahOperasionalPenyeberangan(Request $request){
        $user = $this->getUser();
        $operasional = new OperasionalPenyeberangan();
        $operasional->id_penyeberangan = $user->id;
        $operasional->nama_perusahaan = $request->nama_perusahaan;
        $operasional->nama_kapal = $request->nama_kapal;
        $operasional->type_kapal = $request->type_kapal;
        $operasional->gt = $request->gt;
        $operasional->panjang = $request->panjang;
        $operasional->lebar = $request->lebar;
        $operasional->draft = $request->draft;
        $operasional->kd_pel_asal = $request->kd_pel_asal;
        $operasional->kd_jarak = $request->kd_jarak;
        $operasional->kd_wkt_berlayar = $request->kd_wkt_berlayar;
        $operasional->kd_tb_tgl = $request->kd_tb_tgl;
        $operasional->kd_tb_jam = $request->kd_tb_jam;
        $operasional->kd_tambat = $request->kd_tambat;
        $operasional->kd_jam_labuh = $request->kd_jam_labuh;
        $operasional->kb_pel_tujuan = $request->kb_pel_tujuan;
        $operasional->kb_jarak = $request->kb_jarak;
        $operasional->kb_tgl = $request->kb_tgl;
        $operasional->kb_jam = $request->kb_jam;
        $operasional->nomor_sp = $request->nomor_sp;
        $operasional->tgl_sp = $request->tgl_sp;
        $operasional->kon_bahan_bakar = $request->kon_bahan_bakar;
        $operasional->jen_bahan_bakar = $request->jen_bahan_bakar;
        $operasional->ket = $request->ket;
        $operasional->save();
        return redirect('/penyeberangan/operasional')->with(['succes' => 'Berhasil tambah data!']);
    }

    // Edit Data Operasional
    public function editOperasionalPenyeberangan($id, Request $request){
        $operasional = OperasionalPenyeberangan::findOrFail($id);
        $operasional->update($request->all());
        return redirect('/penyeberangan/operasional')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Hapus Data Operasional
    public function hapusOperasionalPenyeberangan($id){
        $operasional = OperasionalPenyeberangan::FindOrFail($id);
        $operasional->delete();
        return redirect('/penyeberangan/operasional')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // pdfBulanan Data Operasional
    public function pdfBulananOperasional(Request $request){
        $user = $this->getUser();
        $dates = "01-".$request->pickbulan;
        $tgl = new Carbon($dates);
        $tgl->format('Y-m-d');
        $operasional_list = OperasionalPenyeberangan::where('id_penyeberangan' , $user->id)
            ->whereYear('kd_tb_tgl', '=', $tgl)
            ->whereMonth('kd_tb_tgl', '=', $tgl)
            ->orderBy('kd_tb_tgl', 'asc')
            ->get();

        $pdf = PDF::loadview('layout.pdf.pdfBulananOperasionalPny',compact('operasional_list','user', 'tgl'));
        $pdf->setPaper(array(0,0,612.00,1008.00), 'landscape');
        return $pdf->stream();
    }
    // pdfBulanan Data Operasional
    public function pdfTahunanOperasional(Request $request){
        $user = $this->getUser();
        $data = [];
        $gt = [];
        $bulan = 12;
        for ($i = 1; $i <= $bulan; $i++){
            $dates = "01-".$i.'-'.$request->picktahun;
            $tgl = new Carbon($dates);
            $tgl->format('Y-m-d');
            $operasional = OperasionalPenyeberangan::where('id_penyeberangan' , $user->id)
                ->whereYear('kd_tb_tgl', '=', $tgl)
                ->whereMonth('kd_tb_tgl', '=', $tgl)
                ->get();
            $jumlahGT = 0;
            foreach ($operasional as $ope){
                $jumlahGT = $ope->gt + $jumlahGT;
            }
            array_push( $data, $operasional);
            array_push( $gt, $jumlahGT);
        }
        $pdf = PDF::loadview('layout.pdf.pdfTahunanOperasionalPny',compact('data', 'gt', 'user', 'tgl'));
        $pdf->setPaper(array(0,0,612.00,1008.00), 'landscape');
        return $pdf->stream();
    }

    // Data Bongkar Muat
    public function bongkarmuat(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $bongkarmuat_list = BongkarMuatPenyeberangan::where('id_penyeberangan', $user->id)->get();
            return view('layout.penyeberangan.bongkarmuat', compact('bongkarmuat_list', 'value', 'user'));
        }
    }

    // Tambah Data Bongkar Muat
    public function tambahBongkarMuatPenyeberangan(Request $request){
        $user = $this->getUser();
        $bongkarmuat = new BongkarMuatPenyeberangan();
        $bongkarmuat->id_penyeberangan = $user->id;
        $bongkarmuat->nama_perusahaan = $request->nama_perusahaan;
        $bongkarmuat->nama_kapal = $request->nama_kapal;
        $bongkarmuat->adn_b_tgl = $request->adn_b_tgl;
        $bongkarmuat->adn_b_lb = $request->adn_b_lb;
        $bongkarmuat->adn_b_pt = $request->adn_b_pt;
        $bongkarmuat->adn_b_gol1 = $request->adn_b_gol1;
        $bongkarmuat->adn_b_gol2 = $request->adn_b_gol2;
        $bongkarmuat->adn_b_gol3 = $request->adn_b_gol3;
        $bongkarmuat->adn_b_gol4 = $request->adn_b_gol4;
        $bongkarmuat->adn_b_gol5 = $request->adn_b_gol5;
        $bongkarmuat->adn_b_gol6 = $request->adn_b_gol6;
        $bongkarmuat->adn_b_gol7 = $request->adn_b_gol7;
        $bongkarmuat->adn_m_tgl = $request->adn_m_tgl;
        $bongkarmuat->adn_m_lm = $request->adn_m_lm;
        $bongkarmuat->adn_m_pn = $request->adn_m_pn;
        $bongkarmuat->adn_m_gol1 = $request->adn_m_gol1;
        $bongkarmuat->adn_m_gol2 = $request->adn_m_gol2;
        $bongkarmuat->adn_m_gol3 = $request->adn_m_gol3;
        $bongkarmuat->adn_m_gol4 = $request->adn_m_gol4;
        $bongkarmuat->adn_m_gol5 = $request->adn_m_gol5;
        $bongkarmuat->adn_m_gol6 = $request->adn_m_gol6;
        $bongkarmuat->adn_m_gol7 = $request->adn_m_gol7;
        $bongkarmuat->aln_b_tgl = $request->aln_b_tgl;
        $bongkarmuat->aln_b_lb = $request->aln_b_lb;
        $bongkarmuat->aln_b_pt = $request->aln_b_pt;
        $bongkarmuat->aln_b_gol1 = $request->aln_b_gol1;
        $bongkarmuat->aln_b_gol2 = $request->aln_b_gol2;
        $bongkarmuat->aln_b_gol3 = $request->aln_b_gol3;
        $bongkarmuat->aln_b_gol4 = $request->aln_b_gol4;
        $bongkarmuat->aln_b_gol5 = $request->aln_b_gol5;
        $bongkarmuat->aln_b_gol6 = $request->aln_b_gol6;
        $bongkarmuat->aln_b_gol7 = $request->aln_b_gol7;
        $bongkarmuat->aln_m_tgl = $request->aln_m_tgl;
        $bongkarmuat->aln_m_lm = $request->aln_m_lm;
        $bongkarmuat->aln_m_pn = $request->aln_m_pn;
        $bongkarmuat->aln_m_gol1 = $request->aln_m_gol1;
        $bongkarmuat->aln_m_gol2 = $request->aln_m_gol2;
        $bongkarmuat->aln_m_gol3 = $request->aln_m_gol3;
        $bongkarmuat->aln_m_gol4 = $request->aln_m_gol4;
        $bongkarmuat->aln_m_gol5 = $request->aln_m_gol5;
        $bongkarmuat->aln_m_gol6 = $request->aln_m_gol6;
        $bongkarmuat->aln_m_gol7 = $request->aln_m_gol7;
        $bongkarmuat->ket = $request->ket;
        $bongkarmuat->save();
        return redirect('/penyeberangan/bongkarmuat')->with(['succes' => 'Berhasil tambah data!']);
    }

    // Edit Data Bongkar Muat
    public function editBongkarMuatPenyeberangan($id, Request $request){
        $bongkarmuat = BongkarMuatPenyeberangan::findOrFail($id);
        $bongkarmuat->update($request->all());
        return redirect('/penyeberangan/bongkarmuat')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Hapus Data Bongkar Muat
    public function hapusBongkarMuatPenyeberangan($id){
        $bongkarmuat = BongkarMuatPenyeberangan::FindOrFail($id);
        $bongkarmuat->delete();
        return redirect('/penyeberangan/bongkarmuat')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // pdfBulanan Data Bongkar Muat
    public function pdfBulananBongkarMuat(Request $request){
        $user = $this->getUser();
        $dates = "01-".$request->pickbulan;
        $tgl = new Carbon($dates);
        $tgl->format('Y-m-d');
        $bongkarmuat_list = BongkarMuatPenyeberangan::where('id_penyeberangan' , $user->id)
            ->whereYear('adn_b_tgl', '=', $tgl)
            ->whereMonth('adn_b_tgl', '=', $tgl)
            ->orderBy('adn_b_tgl', 'asc')
            ->get();

        $pdf = PDF::loadview('layout.pdf.pdfBulananBongkarMuatPny',compact('bongkarmuat_list','user', 'tgl'));
        $pdf->setPaper(array(0,0,841.89,1190.55), 'landscape');
        return $pdf->stream();
    }

    // pdfBulanan Data Bongkar Muat
    public function pdfTahunanBongkarMuat(Request $request){
        $user = $this->getUser();
        $data = [];
        $PTDN = [];
        $Gol1TDN = [];
        $Gol2TDN = [];
        $Gol3TDN = [];
        $Gol4TDN = [];
        $Gol5TDN = [];
        $Gol6TDN = [];
        $Gol7TDN = [];
        $PMDN = [];
        $Gol1MDN = [];
        $Gol2MDN = [];
        $Gol3MDN = [];
        $Gol4MDN = [];
        $Gol5MDN = [];
        $Gol6MDN = [];
        $Gol7MDN = [];
        $PTLN = [];
        $Gol1TLN = [];
        $Gol2TLN = [];
        $Gol3TLN = [];
        $Gol4TLN = [];
        $Gol5TLN = [];
        $Gol6TLN = [];
        $Gol7TLN = [];
        $PMLN = [];
        $Gol1MLN = [];
        $Gol2MLN = [];
        $Gol3MLN = [];
        $Gol4MLN = [];
        $Gol5MLN = [];
        $Gol6MLN = [];
        $Gol7MLN = [];
        $bulan = 12;
        for ($i = 1; $i <= $bulan; $i++){
            $dates = "01-".$i.'-'.$request->picktahun;
            $tgl = new Carbon($dates);
            $tgl->format('Y-m-d');
            $bongkarmuat = BongkarMuatPenyeberangan::where('id_penyeberangan' , $user->id)
                ->whereYear('adn_b_tgl', '=', $tgl)
                ->whereMonth('adn_b_tgl', '=', $tgl)
                ->get();
            $tambahptdn = 0;
            $tambahgol1tdn = 0;
            $tambahgol2tdn = 0;
            $tambahgol3tdn = 0;
            $tambahgol4tdn = 0;
            $tambahgol5tdn = 0;
            $tambahgol6tdn = 0;
            $tambahgol7tdn = 0;
            $tambahpmdn = 0;
            $tambahgol1mdn = 0;
            $tambahgol2mdn = 0;
            $tambahgol3mdn = 0;
            $tambahgol4mdn = 0;
            $tambahgol5mdn = 0;
            $tambahgol6mdn = 0;
            $tambahgol7mdn = 0;
            $tambahptln = 0;
            $tambahgol1tln = 0;
            $tambahgol2tln = 0;
            $tambahgol3tln = 0;
            $tambahgol4tln = 0;
            $tambahgol5tln = 0;
            $tambahgol6tln = 0;
            $tambahgol7tln = 0;
            $tambahpmln = 0;
            $tambahgol1mln = 0;
            $tambahgol2mln = 0;
            $tambahgol3mln = 0;
            $tambahgol4mln = 0;
            $tambahgol5mln = 0;
            $tambahgol6mln = 0;
            $tambahgol7mln = 0;
            foreach ($bongkarmuat as $ope){
                $tambahptdn = $ope->adn_b_pt + $tambahptdn;
                $tambahgol1tdn = $ope->adn_b_gol1 + $tambahgol1tdn;
                $tambahgol2tdn = $ope->adn_b_gol2 + $tambahgol2tdn;
                $tambahgol3tdn = $ope->adn_b_gol3 + $tambahgol3tdn;
                $tambahgol4tdn = $ope->adn_b_gol4 + $tambahgol4tdn;
                $tambahgol5tdn = $ope->adn_b_gol5 + $tambahgol5tdn;
                $tambahgol6tdn = $ope->adn_b_gol6 + $tambahgol6tdn;
                $tambahgol7tdn = $ope->adn_b_gol7 + $tambahgol7tdn;
                $tambahpmdn = $ope->adn_m_pn + $tambahpmdn;
                $tambahgol1mdn = $ope->adn_m_gol1 + $tambahgol1mdn;
                $tambahgol2mdn = $ope->adn_m_gol2 + $tambahgol2mdn;
                $tambahgol3mdn = $ope->adn_m_gol3 + $tambahgol3mdn;
                $tambahgol4mdn = $ope->adn_m_gol4 + $tambahgol4mdn;
                $tambahgol5mdn = $ope->adn_m_gol5 + $tambahgol5mdn;
                $tambahgol6mdn = $ope->adn_m_gol6 + $tambahgol6mdn;
                $tambahgol7mdn = $ope->adn_m_gol7 + $tambahgol7mdn;
                $tambahptln = $ope->aln_b_pt + $tambahptln;
                $tambahgol1tln = $ope->aln_b_gol1 + $tambahgol1tln;
                $tambahgol2tln = $ope->aln_b_gol2 + $tambahgol2tln;
                $tambahgol3tln = $ope->aln_b_gol3 + $tambahgol3tln;
                $tambahgol4tln = $ope->aln_b_gol4 + $tambahgol4tln;
                $tambahgol5tln = $ope->aln_b_gol5 + $tambahgol5tln;
                $tambahgol6tln = $ope->aln_b_gol6 + $tambahgol6tln;
                $tambahgol7tln = $ope->aln_b_gol7 + $tambahgol7tln;
                $tambahpmln = $ope->aln_m_pn + $tambahpmln;
                $tambahgol1mln = $ope->aln_m_gol1 + $tambahgol1mln;
                $tambahgol2mln = $ope->aln_m_gol2 + $tambahgol2mln;
                $tambahgol3mln = $ope->aln_m_gol3 + $tambahgol3mln;
                $tambahgol4mln = $ope->aln_m_gol4 + $tambahgol4mln;
                $tambahgol5mln = $ope->aln_m_gol5 + $tambahgol5mln;
                $tambahgol6mln = $ope->aln_m_gol6 + $tambahgol6mln;
                $tambahgol7mln = $ope->aln_m_gol7 + $tambahgol7mln;
            }
            array_push( $data, $bongkarmuat);
            array_push( $PTDN, $tambahptdn);
            array_push( $Gol1TDN, $tambahgol1tdn);
            array_push( $Gol2TDN, $tambahgol2tdn);
            array_push( $Gol3TDN, $tambahgol3tdn);
            array_push( $Gol4TDN, $tambahgol4tdn);
            array_push( $Gol5TDN, $tambahgol5tdn);
            array_push( $Gol6TDN, $tambahgol6tdn);
            array_push( $Gol7TDN, $tambahgol7tdn);
            array_push( $PMDN, $tambahpmdn);
            array_push( $Gol1MDN, $tambahgol1mdn);
            array_push( $Gol2MDN, $tambahgol2mdn);
            array_push( $Gol3MDN, $tambahgol3mdn);
            array_push( $Gol4MDN, $tambahgol4mdn);
            array_push( $Gol5MDN, $tambahgol5mdn);
            array_push( $Gol6MDN, $tambahgol6mdn);
            array_push( $Gol7MDN, $tambahgol7mdn);
            array_push( $PTLN, $tambahptln);
            array_push( $Gol1TLN, $tambahgol1tln);
            array_push( $Gol2TLN, $tambahgol2tln);
            array_push( $Gol3TLN, $tambahgol3tln);
            array_push( $Gol4TLN, $tambahgol4tln);
            array_push( $Gol5TLN, $tambahgol5tln);
            array_push( $Gol6TLN, $tambahgol6tln);
            array_push( $Gol7TLN, $tambahgol7tln);
            array_push( $PMLN, $tambahpmln);
            array_push( $Gol1MLN, $tambahgol1mln);
            array_push( $Gol2MLN, $tambahgol2mln);
            array_push( $Gol3MLN, $tambahgol3mln);
            array_push( $Gol4MLN, $tambahgol4mln);
            array_push( $Gol5MLN, $tambahgol5mln);
            array_push( $Gol6MLN, $tambahgol6mln);
            array_push( $Gol7MLN, $tambahgol7mln);
        }
        $pdf = PDF::loadview('layout.pdf.pdfTahunanBongkarMuatPny',compact('data', 'user',
            'tgl', 'PTDN', 'Gol1TDN', 'Gol2TDN', 'Gol3TDN', 'Gol4TDN', 'Gol5TDN', 'Gol6TDN', 'Gol7TDN',
            'PMDN', 'Gol1MDN', 'Gol2MDN', 'Gol3MDN', 'Gol4MDN', 'Gol5MDN', 'Gol6MDN', 'Gol7MDN',
            'PTLN', 'Gol1TLN', 'Gol2TLN', 'Gol3TLN', 'Gol4TLN', 'Gol5TLN', 'Gol6TLN', 'Gol7TLN',
            'PMLN', 'Gol1MLN', 'Gol2MLN', 'Gol3MLN', 'Gol4MLN', 'Gol5MLN', 'Gol6MLN', 'Gol7MLN'
        ));
        $pdf->setPaper(array(0,0,841.89,1190.55), 'landscape');
        return $pdf->stream();
    }

    // Data Pajak Dan Retribusi Daerah
    public function pajakDanRetribusiDaerah(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $pajak_list = PajakRetribusiDaerah::where('id_user', $value->id)->get();
            return view('layout.penyeberangan.pajakretribusidaerah', compact('pajak_list', 'value', 'user'));
        }
    }

    // Tambah Pajak Dan Retribusi Daerah
    public function tambahPajakDanRetribusiDaerah(Request $request){
        $value = Session::get('user');
        $data = ', , ';
        if (PajakRetribusiDaerah::where(['id_user' => $value->id, 'tgl' => $request->tgl])->first()){
            return redirect('/penyeberangan/pajak&RetribusiDaerah')->with(['alert' => 'Gagal! Data pada tanggal tersebut sudah tersedia!']);
        }else{
            $pajak = new PajakRetribusiDaerah();
            $pajak->id_user = $value->id;
            $pajak->tgl = $request->tgl;
            $pajak->labuh_kapal = $data;
            $pajak->tambat = $data;
            $pajak->barang = $data;
            $pajak->hewan = $data;
            $pajak->gudang = $data;
            $pajak->lapangan = $data;
            $pajak->penyimpanan = $data;
            $pajak->pas_penumpang = $data;
            $pajak->gol_1 = $data;
            $pajak->gol_2 = $data;
            $pajak->gol_3 = $data;
            $pajak->gol_4 = $data;
            $pajak->gol_5 = $data;
            $pajak->gol_6 = $data;
            $pajak->gol_7 = $data;
            $pajak->gol_8 = $data;
            $pajak->papan_reklame = $data;
            $pajak->save();
            return redirect('/penyeberangan/pajak&RetribusiDaerah')->with(['succes' => 'Berhasil tambah data!']);
        }
    }

    // Hapus Data Pajak Dan Retribusi Daerah
    public function hapusPajakDanRetribusiDaerah($id){
        $pajak = PajakRetribusiDaerah::FindOrFail($id);
        $pajak->delete();
        return redirect('/penyeberangan/pajak&RetribusiDaerah')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // Detail Pajak Dan Retribusi Daerah
    public function detailPajakDanRetribusiDaerah($id){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $pajak_list = PajakRetribusiDaerah::where('id', $id)->first();

            $labuh_kapal = [];
            $tambat = [];
            $barang = [];
            $hewan = [];
            $gudang = [];
            $lapangan = [];
            $penyimpanan = [];
            $pas_penumpang = [];
            $gol1 = [];
            $gol2 = [];
            $gol3 = [];
            $gol4 = [];
            $gol5 = [];
            $gol6 = [];
            $gol7 = [];
            $gol8 = [];
            $papan_reklame = [];
            foreach (explode(', ', $pajak_list->labuh_kapal) as $a) {
                array_push($labuh_kapal, $a);
            }
            foreach (explode(', ', $pajak_list->tambat)as $b){
                array_push($tambat, $b);
            }
            foreach (explode(', ', $pajak_list->barang) as $c){
                array_push($barang, $c);
            }
            foreach (explode(', ', $pajak_list->hewan) as $d){
                array_push($hewan, $d);
            }
            foreach (explode(', ', $pajak_list->gudang) as $e){
                array_push($gudang, $e);
            }
            foreach (explode(', ', $pajak_list->lapangan) as $f){
                array_push($lapangan, $f);
            }
            foreach (explode(', ', $pajak_list->penyimpanan) as $g){
                array_push($penyimpanan, $g);
            }
            foreach (explode(', ', $pajak_list->pas_penumpang) as $h){
                array_push($pas_penumpang, $h);
            }
            foreach (explode(', ', $pajak_list->gol_1) as $i){
                array_push($gol1, $i);
            }
            foreach (explode(', ', $pajak_list->gol_2) as $j){
                array_push($gol2, $j);
            }
            foreach (explode(', ', $pajak_list->gol_3) as $k){
                array_push($gol3, $k);
            }
            foreach (explode(', ', $pajak_list->gol_4) as $l){
                array_push($gol4, $l);
            }
            foreach (explode(', ', $pajak_list->gol_5) as $m){
                array_push($gol5, $m);
            }
            foreach (explode(', ', $pajak_list->gol_6) as $n){
                array_push($gol6, $n);
            }
            foreach (explode(', ', $pajak_list->gol_7) as $o){
                array_push($gol7, $o);
            }
            foreach (explode(', ', $pajak_list->gol_8) as $p){
                array_push($gol8, $p);
            }
            foreach (explode(', ', $pajak_list->papan_reklame) as $q){
                array_push($papan_reklame, $q);
            }

            return view('layout.penyeberangan.detailpajakretribusidaerah', compact(
                'pajak_list', 'value', 'user', 'labuh_kapal', 'tambat', 'barang',
                'hewan', 'gudang', 'lapangan', 'penyimpanan', 'pas_penumpang', 'gol1', 'gol2',
                'gol3', 'gol4', 'gol5', 'gol6', 'gol7', 'gol8', 'papan_reklame'));
        }
    }

    // Edit Data Pajak Dan Retribusi Daerah
    public function editPajakDanRetribusiDaerah($id, $index, Request $request){
        $pajak = PajakRetribusiDaerah::findOrFail($id);

        $labuh_kapal = [];
        $tambat = [];
        $barang = [];
        $hewan = [];
        $gudang = [];
        $lapangan = [];
        $penyimpanan = [];
        $pas_penumpang = [];
        $gol1 = [];
        $gol2 = [];
        $gol3 = [];
        $gol4 = [];
        $gol5 = [];
        $gol6 = [];
        $gol7 = [];
        $gol8 = [];
        $papan_reklame = [];
        foreach (explode(', ', $pajak->labuh_kapal) as $a) {
            array_push($labuh_kapal, $a);
        }
        foreach (explode(', ', $pajak->tambat)as $b){
            array_push($tambat, $b);
        }
        foreach (explode(', ', $pajak->barang) as $c){
            array_push($barang, $c);
        }
        foreach (explode(', ', $pajak->hewan) as $d){
            array_push($hewan, $d);
        }
        foreach (explode(', ', $pajak->gudang) as $e){
            array_push($gudang, $e);
        }
        foreach (explode(', ', $pajak->lapangan) as $f){
            array_push($lapangan, $f);
        }
        foreach (explode(', ', $pajak->penyimpanan) as $g){
            array_push($penyimpanan, $g);
        }
        foreach (explode(', ', $pajak->pas_penumpang) as $h){
            array_push($pas_penumpang, $h);
        }
        foreach (explode(', ', $pajak->gol_1) as $i){
            array_push($gol1, $i);
        }
        foreach (explode(', ', $pajak->gol_2) as $j){
            array_push($gol2, $j);
        }
        foreach (explode(', ', $pajak->gol_3) as $k){
            array_push($gol3, $k);
        }
        foreach (explode(', ', $pajak->gol_4) as $l){
            array_push($gol4, $l);
        }
        foreach (explode(', ', $pajak->gol_5) as $m){
            array_push($gol5, $m);
        }
        foreach (explode(', ', $pajak->gol_6) as $n){
            array_push($gol6, $n);
        }
        foreach (explode(', ', $pajak->gol_7) as $o){
            array_push($gol7, $o);
        }
        foreach (explode(', ', $pajak->gol_8) as $p){
            array_push($gol8, $p);
        }
        foreach (explode(', ', $pajak->papan_reklame) as $q){
            array_push($papan_reklame, $q);
        }

        $labuh_kapal[$index] = $request->labuh_kapal;
        $tambat[$index] = $request->tambat;
        $barang[$index] = $request->barang;
        $hewan[$index] = $request->hewan;
        $gudang[$index] = $request->gudang;
        $lapangan[$index] = $request->lapangan;
        $penyimpanan[$index] = $request->penyimpanan;
        $pas_penumpang[$index] = $request->pas_penumpang;
        $gol1[$index] = $request->gol_1;
        $gol2[$index] = $request->gol_2;
        $gol3[$index] = $request->gol_3;
        $gol4[$index] = $request->gol_4;
        $gol5[$index] = $request->gol_5;
        $gol6[$index] = $request->gol_6;
        $gol7[$index] = $request->gol_7;
        $gol8[$index] = $request->gol_8;
        $papan_reklame[$index] = $request->papan_reklame;

        $pajak->labuh_kapal = implode(', ', $labuh_kapal);
        $pajak->tambat = implode(', ', $tambat);
        $pajak->barang = implode(', ', $barang);
        $pajak->hewan = implode(', ', $hewan);
        $pajak->gudang = implode(', ', $gudang);
        $pajak->lapangan = implode(', ', $lapangan);
        $pajak->penyimpanan = implode(', ', $penyimpanan);
        $pajak->pas_penumpang = implode(', ', $pas_penumpang);
        $pajak->gol_1 = implode(', ', $gol1);
        $pajak->gol_2 = implode(', ', $gol2);
        $pajak->gol_3 = implode(', ', $gol3);
        $pajak->gol_4 = implode(', ', $gol4);
        $pajak->gol_5 = implode(', ', $gol5);
        $pajak->gol_6 = implode(', ', $gol6);
        $pajak->gol_7 = implode(', ', $gol7);
        $pajak->gol_8 = implode(', ', $gol8);
        $pajak->papan_reklame = implode(', ', $papan_reklame);
        $pajak->update();
        return redirect('/penyeberangan/detailPajak&RetribusiDaerah/'.$id)->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // PDF Pajak Dan Retribusi Daerah
    public function pdfPajakDanRetribusiDaerah($id){
        $user = $this->getUser();

        $value = Session::get('user');
        $pajak_list = PajakRetribusiDaerah::where('id', $id)->first();

        $labuh_kapal = [];
        $tambat = [];
        $barang = [];
        $hewan = [];
        $gudang = [];
        $lapangan = [];
        $penyimpanan = [];
        $pas_penumpang = [];
        $gol1 = [];
        $gol2 = [];
        $gol3 = [];
        $gol4 = [];
        $gol5 = [];
        $gol6 = [];
        $gol7 = [];
        $gol8 = [];
        $papan_reklame = [];
        foreach (explode(', ', $pajak_list->labuh_kapal) as $a) {
            array_push($labuh_kapal, $a);
        }
        foreach (explode(', ', $pajak_list->tambat)as $b){
            array_push($tambat, $b);
        }
        foreach (explode(', ', $pajak_list->barang) as $c){
            array_push($barang, $c);
        }
        foreach (explode(', ', $pajak_list->hewan) as $d){
            array_push($hewan, $d);
        }
        foreach (explode(', ', $pajak_list->gudang) as $e){
            array_push($gudang, $e);
        }
        foreach (explode(', ', $pajak_list->lapangan) as $f){
            array_push($lapangan, $f);
        }
        foreach (explode(', ', $pajak_list->penyimpanan) as $g){
            array_push($penyimpanan, $g);
        }
        foreach (explode(', ', $pajak_list->pas_penumpang) as $h){
            array_push($pas_penumpang, $h);
        }
        foreach (explode(', ', $pajak_list->gol_1) as $i){
            array_push($gol1, $i);
        }
        foreach (explode(', ', $pajak_list->gol_2) as $j){
            array_push($gol2, $j);
        }
        foreach (explode(', ', $pajak_list->gol_3) as $k){
            array_push($gol3, $k);
        }
        foreach (explode(', ', $pajak_list->gol_4) as $l){
            array_push($gol4, $l);
        }
        foreach (explode(', ', $pajak_list->gol_5) as $m){
            array_push($gol5, $m);
        }
        foreach (explode(', ', $pajak_list->gol_6) as $n){
            array_push($gol6, $n);
        }
        foreach (explode(', ', $pajak_list->gol_7) as $o){
            array_push($gol7, $o);
        }
        foreach (explode(', ', $pajak_list->gol_8) as $p){
            array_push($gol8, $p);
        }
        foreach (explode(', ', $pajak_list->papan_reklame) as $q){
            array_push($papan_reklame, $q);
        }

        $pdf = PDF::loadview('layout.pdf.pdfPajakDanRetribusiDaerahPny',compact(
            'pajak_list', 'value', 'user', 'labuh_kapal', 'tambat', 'barang',
            'hewan', 'gudang', 'lapangan', 'penyimpanan', 'pas_penumpang', 'gol1', 'gol2',
            'gol3', 'gol4', 'gol5', 'gol6', 'gol7', 'gol8', 'papan_reklame'));
        $pdf->setPaper(array(0,0,595.28,841.89), 'potrait');
        return $pdf->stream();
    }

    // Data Penjualan Pas Masuk
    public function penjualanPasMasuk(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $penjualan_list = PenjualanPasMasuk::where('id_penyeberangan', $user->id)->get();
            return view('layout.penyeberangan.penjualanpasmasuk', compact('penjualan_list', 'value', 'user'));
        }
    }

    // Tambah Penjualan Pas Masuk
    public function tambahPenjualanPasMasuk(Request $request){
        $user = $this->getUser();
        $data = ', , , ';
        if (PenjualanPasMasuk::where(['id_penyeberangan' => $user->id, 'tanggal' => $request->tanggal])->first()){
            return redirect('/penyeberangan/penjualanPasMasuk')->with(['alert' => 'Gagal! Data pada tanggal tersebut sudah tersedia!']);
        }else{
            $penjualan = new PenjualanPasMasuk();
            $penjualan->id_penyeberangan = $user->id;
            $penjualan->tanggal = $request->tanggal;
            $penjualan->penumpang = $data;
            $penjualan->gol1 = $data;
            $penjualan->gol2 = $data;
            $penjualan->gol3 = $data;
            $penjualan->gol4 = $data;
            $penjualan->gol5 = $data;
            $penjualan->gol6 = $data;
            $penjualan->gol7 = $data;
            $penjualan->gol8 = $data;
            $penjualan->save();
            return redirect('/penyeberangan/penjualanPasMasuk')->with(['succes' => 'Berhasil tambah data!']);
        }
    }

    // Hapus Data Penjualan Pas Masuk
    public function hapusPenjualanPasMasuk($id){
        $penjualan = PenjualanPasMasuk::FindOrFail($id);
        $penjualan->delete();
        return redirect('/penyeberangan/penjualanPasMasuk')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // Detail Penjualan Pas Masuk
    public function detailPenjualanPasMasuk($id){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $penjualan_list = PenjualanPasMasuk::where('id', $id)->first();

            $penumpang = [];
            $gol1 = [];
            $gol2 = [];
            $gol3 = [];
            $gol4 = [];
            $gol5 = [];
            $gol6 = [];
            $gol7 = [];
            $gol8 = [];
            foreach (explode(', ', $penjualan_list->penumpang) as $a) {
                array_push($penumpang, $a);
            }
            foreach (explode(', ', $penjualan_list->gol1) as $i){
                array_push($gol1, $i);
            }
            foreach (explode(', ', $penjualan_list->gol2) as $j){
                array_push($gol2, $j);
            }
            foreach (explode(', ', $penjualan_list->gol3) as $k){
                array_push($gol3, $k);
            }
            foreach (explode(', ', $penjualan_list->gol4) as $l){
                array_push($gol4, $l);
            }
            foreach (explode(', ', $penjualan_list->gol5) as $m){
                array_push($gol5, $m);
            }
            foreach (explode(', ', $penjualan_list->gol6) as $n){
                array_push($gol6, $n);
            }
            foreach (explode(', ', $penjualan_list->gol7) as $o){
                array_push($gol7, $o);
            }
            foreach (explode(', ', $penjualan_list->gol8) as $p){
                array_push($gol8, $p);
            }

            return view('layout.penyeberangan.detailpenjualanpasmasuk', compact(
                'penjualan_list', 'value', 'user', 'penumpang', 'gol1', 'gol2',
                'gol3', 'gol4', 'gol5', 'gol6', 'gol7', 'gol8'));
        }
    }

    // Edit Data Penjualan Pas Masuk
    public function editPenjualanPasMasuk($id, $index, Request $request){
        $penjualan = PenjualanPasMasuk::findOrFail($id);

        $penumpang = [];
        $gol1 = [];
        $gol2 = [];
        $gol3 = [];
        $gol4 = [];
        $gol5 = [];
        $gol6 = [];
        $gol7 = [];
        $gol8 = [];
        foreach (explode(', ', $penjualan->penumpang) as $a) {
            array_push($penumpang, $a);
        }
        foreach (explode(', ', $penjualan->gol1) as $i){
            array_push($gol1, $i);
        }
        foreach (explode(', ', $penjualan->gol2) as $j){
            array_push($gol2, $j);
        }
        foreach (explode(', ', $penjualan->gol3) as $k){
            array_push($gol3, $k);
        }
        foreach (explode(', ', $penjualan->gol4) as $l){
            array_push($gol4, $l);
        }
        foreach (explode(', ', $penjualan->gol5) as $m){
            array_push($gol5, $m);
        }
        foreach (explode(', ', $penjualan->gol6) as $n){
            array_push($gol6, $n);
        }
        foreach (explode(', ', $penjualan->gol7) as $o){
            array_push($gol7, $o);
        }
        foreach (explode(', ', $penjualan->gol8) as $p){
            array_push($gol8, $p);
        }

        $penumpang[$index] = $request->penumpang;
        $gol1[$index] = $request->gol1;
        $gol2[$index] = $request->gol2;
        $gol3[$index] = $request->gol3;
        $gol4[$index] = $request->gol4;
        $gol5[$index] = $request->gol5;
        $gol6[$index] = $request->gol6;
        $gol7[$index] = $request->gol7;
        $gol8[$index] = $request->gol8;

        $penjualan->penumpang = implode(', ', $penumpang);
        $penjualan->gol1 = implode(', ', $gol1);
        $penjualan->gol2 = implode(', ', $gol2);
        $penjualan->gol3 = implode(', ', $gol3);
        $penjualan->gol4 = implode(', ', $gol4);
        $penjualan->gol5 = implode(', ', $gol5);
        $penjualan->gol6 = implode(', ', $gol6);
        $penjualan->gol7 = implode(', ', $gol7);
        $penjualan->gol8 = implode(', ', $gol8);
        $penjualan->update();
        return redirect('/penyeberangan/detailPenjualanPasMasuk/'.$id)->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // PDF Penjualan Pas Masuk
    public function pdfPenjualanPasMasuk($id){
        $user = $this->getUser();

        $penjualan_list = PenjualanPasMasuk::where('id', $id)->first();

        $penumpang = [];
        $gol1 = [];
        $gol2 = [];
        $gol3 = [];
        $gol4 = [];
        $gol5 = [];
        $gol6 = [];
        $gol7 = [];
        $gol8 = [];
        foreach (explode(', ', $penjualan_list->penumpang) as $a) {
            array_push($penumpang, $a);
        }
        foreach (explode(', ', $penjualan_list->gol1) as $i){
            array_push($gol1, $i);
        }
        foreach (explode(', ', $penjualan_list->gol2) as $j){
            array_push($gol2, $j);
        }
        foreach (explode(', ', $penjualan_list->gol3) as $k){
            array_push($gol3, $k);
        }
        foreach (explode(', ', $penjualan_list->gol4) as $l){
            array_push($gol4, $l);
        }
        foreach (explode(', ', $penjualan_list->gol5) as $m){
            array_push($gol5, $m);
        }
        foreach (explode(', ', $penjualan_list->gol6) as $n){
            array_push($gol6, $n);
        }
        foreach (explode(', ', $penjualan_list->gol7) as $o){
            array_push($gol7, $o);
        }
        foreach (explode(', ', $penjualan_list->gol8) as $p){
            array_push($gol8, $p);
        }

        $pdf = PDF::loadview('layout.pdf.pdfPenjualanPasMasuk',compact(
            'penjualan_list', 'value', 'user', 'penumpang', 'gol1', 'gol2',
            'gol3', 'gol4', 'gol5', 'gol6', 'gol7', 'gol8'));
        $pdf->setPaper(array(0,0,595.28,841.89), 'potrait');
        return $pdf->stream();
    }
}
