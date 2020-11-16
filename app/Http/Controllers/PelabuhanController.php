<?php

namespace App\Http\Controllers;

use App\BongkarMuatPelabuhan;
use App\Fasilitas;
use App\FasilitasDaratPelPny;
use App\FasilitasPelPny;
use App\FasilitasPerairanPelPny;
use App\FasilitasPeralatan;
use App\FasilitasSarana;
use App\OperasionalPelabuhan;
use App\PajakRetribusiDaerah;
use App\Pelabuhan;
use App\Perencanaan;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PDF;

class PelabuhanController extends Controller
{

    public function getUser(){
        $value = Session::get('user');
        $user = Pelabuhan::where('id_user', $value->id)->first();
        return $user;
    }

    public function home(){
        $user = $this->getUser();
        $operasional = OperasionalPelabuhan::where('id_pelabuhan', $user->id)->get();
        $bongkarmuat = OperasionalPelabuhan::where('id_pelabuhan', $user->id)->get();
        return view('layout.pelabuhan.home', compact('user', 'operasional'));
    }

    // View Profil Pelabuhan
    public function profil(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $pelabuhan = Pelabuhan::where('id_user', $value->id)->first();
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
            return view('layout.pelabuhan.profil', compact('pelabuhan', 'perencanaan', 'fasilitas', 'value',
                'user', 'fasilitas_darat', 'fasilitas_perairan', 'fasilitas_peralatan',
                'fasilitas_sarana', 'dlkr', 'dlkp'));
        }
    }

    // Edit Data Pelabuhan
    public function editPelabuhan($id, Request $request){
        $pelabuhan = Pelabuhan::findOrFail($id);
        $pelabuhan->update($request->all());
        return redirect('/pelabuhan/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Perencanaan
    public function editPerencanaan($id, Request $request){
        $perencanaan = Perencanaan::findOrFail($id);
        $perencanaan->update($request->all());
        return redirect('/pelabuhan/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Faslitas Darat
    public function editFasilitasDarat($id, Request $request){
        $fasilitas = FasilitasDaratPelPny::findOrFail($id);
        $fasilitas->update($request->all());
        return redirect('/pelabuhan/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Faslitas Perairan
    public function editFasilitasPerairan($id, Request $request){
        $fasilitas = FasilitasPerairanPelPny::findOrFail($id);
        $fasilitas->update($request->all());
        return redirect('/pelabuhan/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
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
        return redirect('/pelabuhan/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Faslitas Peralatan
    public function editFasilitasPeralatan($id, Request $request){
        $fasilitas = FasilitasPeralatan::findOrFail($id);
        $fasilitas->update($request->all());
        return redirect('/pelabuhan/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Faslitas Sarana
    public function editFasilitasSarana($id, Request $request){
        $fasilitas = FasilitasSarana::findOrFail($id);
        $fasilitas->update($request->all());
        return redirect('/pelabuhan/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Data Operasional
    public function dataoperasional(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $operasional_list = OperasionalPelabuhan::where('id_pelabuhan', $user->id)->get();
            return view('layout.pelabuhan.dataoperasional', compact('operasional_list', 'value', 'user'));
        }
    }

    // Tambah Data Operasional
    public function tambahOperasionalPelabuhan(Request $request){
        $user = $this->getUser();
        $operasional = new OperasionalPelabuhan();
        $operasional->id_pelabuhan = $user->id;
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
        return redirect('/pelabuhan/operasional')->with(['succes' => 'Berhasil tambah data!']);
    }

    // Edit Data Operasional
    public function editOperasionalPelabuhan($id, Request $request){
        $operasional = OperasionalPelabuhan::findOrFail($id);
        $operasional->update($request->all());
        return redirect('/pelabuhan/operasional')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Hapus Data Operasional
    public function hapusOperasionalPelabuhan($id){
        $operasional = OperasionalPelabuhan::FindOrFail($id);
        $operasional->delete();
        return redirect('/pelabuhan/operasional')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // pdfBulanan Data Operasional
    public function pdfBulananOperasional(Request $request){
        $user = $this->getUser();
        $dates = "01-".$request->pickbulan;
        $tgl = new Carbon($dates);
        $tgl->format('Y-m-d');
        $operasional_list = OperasionalPelabuhan::where('id_pelabuhan' , $user->id)
            ->whereYear('kd_tb_tgl', '=', $tgl)
            ->whereMonth('kd_tb_tgl', '=', $tgl)
            ->orderBy('kd_tb_tgl', 'asc')
            ->get();

        $pdf = PDF::loadview('layout.pdf.pdfBulananOperasional',compact('operasional_list','user', 'tgl'));
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
            $operasional = OperasionalPelabuhan::where('id_pelabuhan' , $user->id)
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
        $pdf = PDF::loadview('layout.pdf.pdfTahunanOperasional',compact('data', 'gt', 'user', 'tgl'));
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
            $bongkarmuat_list = BongkarMuatPelabuhan::where('id_pelabuhan', $user->id)->get();
            return view('layout.pelabuhan.bongkarmuat', compact('bongkarmuat_list', 'value', 'user'));
        }
    }

    // Tambah Data Bongkar Muat
    public function tambahBongkarMuatPelabuhan(Request $request){
        $user = $this->getUser();
        $bongkarmuat = new BongkarMuatPelabuhan();
        $bongkarmuat->id_pelabuhan = $user->id;
        $bongkarmuat->nama_perusahaan = $request->nama_perusahaan;
        $bongkarmuat->nama_kapal = $request->nama_kapal;
        $bongkarmuat->adn_b_tgl = $request->adn_b_tgl;
        $bongkarmuat->adn_b_lb = $request->adn_b_lb;
        $bongkarmuat->adn_b_pt = $request->adn_b_pt;
        $bongkarmuat->adn_b_hewan = $request->adn_b_hewan;
        $bongkarmuat->adn_b_peti = $request->adn_b_peti;
        $bongkarmuat->adn_b_jumlah = $request->adn_b_jumlah;
        $bongkarmuat->adn_b_barang = $request->adn_b_barang;
        $bongkarmuat->adn_b_volume = $request->adn_b_volume;
        $bongkarmuat->adn_m_tgl = $request->adn_m_tgl;
        $bongkarmuat->adn_m_lm = $request->adn_m_lm;
        $bongkarmuat->adn_m_pn = $request->adn_m_pn;
        $bongkarmuat->adn_m_hewan = $request->adn_m_hewan;
        $bongkarmuat->adn_m_peti = $request->adn_m_peti;
        $bongkarmuat->adn_m_jumlah = $request->adn_m_jumlah;
        $bongkarmuat->adn_m_barang = $request->adn_m_barang;
        $bongkarmuat->adn_m_volume = $request->adn_m_volume;
        $bongkarmuat->aln_b_tgl = $request->aln_b_tgl;
        $bongkarmuat->aln_b_lb = $request->aln_b_lb;
        $bongkarmuat->aln_b_pt = $request->aln_b_pt;
        $bongkarmuat->aln_b_hewan = $request->aln_b_hewan;
        $bongkarmuat->aln_b_peti = $request->aln_b_peti;
        $bongkarmuat->aln_b_jumlah = $request->aln_b_jumlah;
        $bongkarmuat->aln_b_barang = $request->aln_b_barang;
        $bongkarmuat->aln_b_volume = $request->aln_b_volume;
        $bongkarmuat->aln_m_tgl = $request->aln_m_tgl;
        $bongkarmuat->aln_m_lm = $request->aln_m_lm;
        $bongkarmuat->aln_m_pn = $request->aln_m_pn;
        $bongkarmuat->aln_m_hewan = $request->aln_m_hewan;
        $bongkarmuat->aln_m_peti = $request->aln_m_peti;
        $bongkarmuat->aln_m_jumlah = $request->aln_m_jumlah;
        $bongkarmuat->aln_m_barang = $request->aln_m_barang;
        $bongkarmuat->aln_m_volume = $request->aln_m_volume;
        $bongkarmuat->ket = $request->ket;
        $bongkarmuat->save();
        return redirect('/pelabuhan/bongkarmuat')->with(['succes' => 'Berhasil tambah data!']);
    }

    // Edit Data Bongkar Muat
    public function editBongkarMuatPelabuhan($id, Request $request){
        $bongkarmuat = BongkarMuatPelabuhan::findOrFail($id);
        $bongkarmuat->update($request->all());
        return redirect('/pelabuhan/bongkarmuat')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Hapus Data Bongkar Muat
    public function hapusBongkarMuatPelabuhan($id){
        $bongkarmuat = BongkarMuatPelabuhan::FindOrFail($id);
        $bongkarmuat->delete();
        return redirect('/pelabuhan/bongkarmuat')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // Data Pajak Dan Retribusi Daerah
    public function pajakDanRetribusiDaerah(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $pajak_list = PajakRetribusiDaerah::where('id_user', $value->id)->get();
            return view('layout.pelabuhan.pajakretribusidaerah', compact('pajak_list', 'value', 'user'));
        }
    }

    // pdfBulanan Data Bongkar Muat
    public function pdfBulananBongkarMuat(Request $request){
        $user = $this->getUser();
        $dates = "01-".$request->pickbulan;
        $tgl = new Carbon($dates);
        $tgl->format('Y-m-d');
        $bongkarmuat_list = BongkarMuatPelabuhan::where('id_pelabuhan' , $user->id)
            ->whereYear('adn_b_tgl', '=', $tgl)
            ->whereMonth('adn_b_tgl', '=', $tgl)
            ->orderBy('adn_b_tgl', 'asc')
            ->get();

        $pdf = PDF::loadview('layout.pdf.pdfBulananBongkarMuatPel',compact('bongkarmuat_list','user', 'tgl'));
        $pdf->setPaper(array(0,0,841.89,1190.55), 'landscape');
        return $pdf->stream();
    }

    // pdfBulanan Data Bongkar Muat
    public function pdfTahunanBongkarMuat(Request $request){
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
            $bongkarmuat = BongkarMuatPelabuhan::where('id_pelabuhan' , $user->id)
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
        $pdf = PDF::loadview('layout.pdf.pdfTahunanBongkarMuatPel',compact('data', 'user',
            'tgl', 'PTDN', 'HewanTDN', 'PetiTDN', 'JumlahTDN', 'BarangTDN', 'VolumeTDN',
            'PMDN', 'HewanMDN', 'PetiMDN', 'JumlahMDN', 'BarangMDN', 'VolumeMDN',
            'PTLN', 'HewanTLN', 'PetiTLN', 'JumlahTLN', 'BarangTLN', 'VolumeTLN',
            'PMLN', 'HewanMLN', 'PetiMLN', 'JumlahMLN', 'BarangMLN', 'VolumeMLN'));
        $pdf->setPaper(array(0,0,841.89,1190.55), 'landscape');
        return $pdf->stream();
    }

    // Tambah Pajak Dan Retribusi Daerah
    public function tambahPajakDanRetribusiDaerah(Request $request){
        $value = Session::get('user');
        $data = ', , ';
        if (PajakRetribusiDaerah::where(['id_user' => $value->id,'tgl' => $request->tgl])->first()){
            return redirect('/pelabuhan/pajak&RetribusiDaerah')->with(['alert' => 'Gagal! Data pada tanggal tersebut sudah tersedia!']);
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
            return redirect('/pelabuhan/pajak&RetribusiDaerah')->with(['succes' => 'Berhasil tambah data!']);
        }
    }

    // Hapus Data Pajak Dan Retribusi Daerah
    public function hapusPajakDanRetribusiDaerah($id){
        $pajak = PajakRetribusiDaerah::FindOrFail($id);
        $pajak->delete();
        return redirect('/pelabuhan/pajak&RetribusiDaerah')->with(['succes' => 'Berhasil Hapus Data!']);
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

            return view('layout.pelabuhan.detailpajakretribusidaerah', compact(
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
        return redirect('/pelabuhan/detailPajak&RetribusiDaerah/'.$id)->with(['succes' => 'Berhasil melakukan perubahan data!']);
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

        $pdf = PDF::loadview('layout.pdf.pdfPajakDanRetribusiDaerah',compact(
            'pajak_list', 'value', 'user', 'labuh_kapal', 'tambat', 'barang',
            'hewan', 'gudang', 'lapangan', 'penyimpanan', 'pas_penumpang', 'gol1', 'gol2',
            'gol3', 'gol4', 'gol5', 'gol6', 'gol7', 'gol8', 'papan_reklame'));
        $pdf->setPaper(array(0,0,595.28,841.89), 'potrait');
        return $pdf->stream();
    }
}
