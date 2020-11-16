<?php

namespace App\Http\Controllers;

use App\BongkarMuatPelabuhan;
use App\BongkarMuatTuksTersus;
use App\Fasilitas;
use App\FasilitasDaratPelPny;
use App\FasilitasDaratTuksTersus;
use App\FasilitasPerairanPelPny;
use App\FasilitasPerairanTuksTersus;
use App\FasilitasPeralatan;
use App\FasilitasSarana;
use App\OperasionalPelabuhan;
use App\OperasionalTuksTersus;
use App\Perencanaan;
use App\SewaPerairan;
use App\TuksTersus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class TuksTersusController extends Controller
{

    public function getUser(){
        $value = Session::get('user');
        $user = TuksTersus::where('id_user', $value->id)->first();
        return $user;
    }

    public function home(){
        $user = $this->getUser();
        return view('layout.tukstersus.home', compact('user'));
    }

    // View Profil Perusahaan
    public function profil(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $perusahaan = TuksTersus::where('id_user', $value->id)->first();
            $perencanaan = Perencanaan::where('id_user', $value->id)->first();
            $fasilitas = Fasilitas::where('id_user', $value->id)->first();
            $fasilitas_darat = FasilitasDaratTuksTersus::where('id_fasilitas', $fasilitas->id)->first();
            $fasilitas_perairan = FasilitasPerairanTuksTersus::where('id_fasilitas', $fasilitas->id)->first();
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
            return view('layout.tukstersus.profil', compact('perusahaan', 'perencanaan', 'fasilitas', 'value',
                'user', 'fasilitas_darat', 'fasilitas_perairan', 'fasilitas_peralatan',
                'fasilitas_sarana', 'dlkr', 'dlkp'));
        }
    }

    // Edit Data Tuks/Tersus
    public function editTuksTersus($id, Request $request){
        $perusahaan = TuksTersus::findOrFail($id);
        $perusahaan->update($request->all());
        return redirect('/tukstersus/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Perencanaan
    public function editPerencanaan($id, Request $request){
        $perencanaan = Perencanaan::findOrFail($id);
        $perencanaan->update($request->all());
        return redirect('/tukstersus/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Faslitas Darat
    public function editFasilitasDarat($id, Request $request){
        $fasilitas = FasilitasDaratTuksTersus::findOrFail($id);
        $fasilitas->update($request->all());
        return redirect('/tukstersus/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Faslitas Perairan
    public function editFasilitasPerairan($id, Request $request){
        $fasilitas = FasilitasPerairanTuksTersus::findOrFail($id);
        $fasilitas->update($request->all());
        return redirect('/tukstersus/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
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
        return redirect('/tukstersus/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Faslitas Peralatan
    public function editFasilitasPeralatan($id, Request $request){
        $fasilitas = FasilitasPeralatan::findOrFail($id);
        $fasilitas->update($request->all());
        return redirect('/tukstersus/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Edit Data Faslitas Sarana
    public function editFasilitasSarana($id, Request $request){
        $fasilitas = FasilitasSarana::findOrFail($id);
        $fasilitas->update($request->all());
        return redirect('/tukstersus/profil')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Data Operasional
    public function dataoperasional(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $operasional_list = OperasionalTuksTersus::where('id_tukstersus', $user->id)->get();
            return view('layout.tukstersus.dataoperasional', compact('operasional_list', 'value', 'user'));
        }
    }

    // Tambah Data Operasional
    public function tambahOperasionalTuksTersus(Request $request){
        $user = $this->getUser();
        $operasional = new OperasionalTuksTersus();
        $operasional->id_tukstersus = $user->id;
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
        return redirect('/tukstersus/operasional')->with(['succes' => 'Berhasil tambah data!']);
    }

    // Edit Data Operasional
    public function editOperasionalTuksTersus($id, Request $request){
        $operasional = OperasionalTuksTersus::findOrFail($id);
        $operasional->update($request->all());
        return redirect('/tukstersus/operasional')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Hapus Data Operasional
    public function hapusOperasionalTuksTersus($id){
        $operasional = OperasionalTuksTersus::FindOrFail($id);
        $operasional->delete();
        return redirect('/tukstersus/operasional')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // pdfBulanan Data Operasional
    public function pdfBulananOperasional(Request $request){
        $user = $this->getUser();
        $dates = "01-".$request->pickbulan;
        $tgl = new Carbon($dates);
        $tgl->format('Y-m-d');
        $operasional_list = OperasionalTuksTersus::where('id_tukstersus' , $user->id)
            ->whereYear('kd_tb_tgl', '=', $tgl)
            ->whereMonth('kd_tb_tgl', '=', $tgl)
            ->orderBy('kd_tb_tgl', 'asc')
            ->get();

        $pdf = PDF::loadview('layout.pdf.pdfBulananOperasionalTuksTersus',compact('operasional_list','user', 'tgl'));
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
            $operasional = OperasionalTuksTersus::where('id_tukstersus' , $user->id)
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
        $pdf = PDF::loadview('layout.pdf.pdfTahunanOperasionalTuksTersus',compact('data', 'gt', 'user', 'tgl'));
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
            $bongkarmuat_list = BongkarMuatTuksTersus::where('id_tukstersus', $user->id)->get();
            return view('layout.tukstersus.bongkarmuat', compact('bongkarmuat_list', 'value', 'user'));
        }
    }

    // Tambah Data Bongkar Muat
    public function tambahBongkarMuatTuksTersus(Request $request){
        $user = $this->getUser();
        $bongkarmuat = new BongkarMuatTuksTersus();
        $bongkarmuat->id_tukstersus = $user->id;
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
        return redirect('/tukstersus/bongkarmuat')->with(['succes' => 'Berhasil tambah data!']);
    }

    // Edit Data Bongkar Muat
    public function editBongkarMuatTuksTersus($id, Request $request){
        $bongkarmuat = BongkarMuatTuksTersus::findOrFail($id);
        $bongkarmuat->update($request->all());
        return redirect('/tukstersus/bongkarmuat')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Hapus Data Bongkar Muat
    public function hapusBongkarMuatTuksTersus($id){
        $bongkarmuat = BongkarMuatTuksTersus::FindOrFail($id);
        $bongkarmuat->delete();
        return redirect('/tukstersus/bongkarmuat')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // pdfBulanan Data Bongkar Muat
    public function pdfBulananBongkarMuat(Request $request){
        $user = $this->getUser();
        $dates = "01-".$request->pickbulan;
        $tgl = new Carbon($dates);
        $tgl->format('Y-m-d');
        $bongkarmuat_list = BongkarMuatTuksTersus::where('id_tukstersus' , $user->id)
            ->whereYear('adn_b_tgl', '=', $tgl)
            ->whereMonth('adn_b_tgl', '=', $tgl)
            ->orderBy('adn_b_tgl', 'asc')
            ->get();

        $pdf = PDF::loadview('layout.pdf.pdfBulananBongkarMuatTuksTersus',compact('bongkarmuat_list','user', 'tgl'));
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
            $bongkarmuat = BongkarMuatTuksTersus::where('id_tukstersus' , $user->id)
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
        $pdf = PDF::loadview('layout.pdf.pdfTahunanBongkarMuatTuksTersus',compact('data', 'user',
            'tgl', 'PTDN', 'HewanTDN', 'PetiTDN', 'JumlahTDN', 'BarangTDN', 'VolumeTDN',
            'PMDN', 'HewanMDN', 'PetiMDN', 'JumlahMDN', 'BarangMDN', 'VolumeMDN',
            'PTLN', 'HewanTLN', 'PetiTLN', 'JumlahTLN', 'BarangTLN', 'VolumeTLN',
            'PMLN', 'HewanMLN', 'PetiMLN', 'JumlahMLN', 'BarangMLN', 'VolumeMLN'));
        $pdf->setPaper(array(0,0,841.89,1190.55), 'landscape');
        return $pdf->stream();
    }

    // Data Sewa Perairan
    public function sewaPerairan(){
        $user = $this->getUser();
        if(!Session::has('user')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }else{
            $value = Session::get('user');
            $sewaperairan_list = SewaPerairan::where('id_tukstersus', $user->id)->get();
            return view('layout.tukstersus.sewaperairan', compact('sewaperairan_list', 'value', 'user'));
        }
    }

    // Tambah Data Bongkar Muat
    public function tambahSewaPerairan(Request $request){
        $user = $this->getUser();
        $sewaperairan = new SewaPerairan();
        $sewaperairan->id_tukstersus = $user->id;
        $sewaperairan->tuks_tersus = $request->tuks_tersus;
        $sewaperairan->no_perjanjian = $request->no_perjanjian;
        $sewaperairan->awal = $request->awal;
        $sewaperairan->akhir = $request->akhir;
        $sewaperairan->luas_perairan = $request->luas_perairan;
        $sewaperairan->tarif = $request->tarif;
        $sewaperairan->pungutan = $request->pungutan;
        $sewaperairan->denda = $request->denda;
        $sewaperairan->total = $request->total;
        $sewaperairan->ket = $request->ket;
        $sewaperairan->save();
        return redirect('/tukstersus/sewaperairan')->with(['succes' => 'Berhasil tambah data!']);
    }

    // Edit Data Bongkar Muat
    public function editSewaPerairan($id, Request $request){
        $sewaperairan = SewaPerairan::findOrFail($id);
        $sewaperairan->update($request->all());
        return redirect('/tukstersus/sewaperairan')->with(['succes' => 'Berhasil melakukan perubahan data!']);
    }

    // Hapus Data Bongkar Muat
    public function hapusSewaPerairan($id){
        $sewaperairan = SewaPerairan::FindOrFail($id);
        $sewaperairan->delete();
        return redirect('/tukstersus/sewaperairan')->with(['succes' => 'Berhasil Hapus Data!']);
    }

    // pdfBulanan Sewa Perairan
    public function pdfBulananSewaPerairan(Request $request){
        $user = $this->getUser();
        $dates = "01-".$request->pickbulan;
        $tgl = new Carbon($dates);
        $tgl->format('Y-m-d');
        $sewaperairan_list = SewaPerairan::where('id_tukstersus' , $user->id)
            ->whereYear('awal', '=', $tgl)
            ->whereMonth('awal', '=', $tgl)
            ->orderBy('awal', 'asc')
            ->get();

        $pdf = PDF::loadview('layout.pdf.pdfBulananSewaPerairan',compact('sewaperairan_list','user', 'tgl'));
        $pdf->setPaper(array(0,0,595.28,841.89), 'landscape');
        return $pdf->stream();
    }
}
