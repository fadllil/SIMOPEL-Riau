@section('title')
    SIMOPEL-Riau | Profil
@endsection

@extends('main.maintukstersus')

@section('container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="col-md-12">
                    @if ($message = Session::get('succes'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('alert'))
                        <div class="alert alert-warning alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('warning'))
                        <div class="alert alert-warning alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('info'))
                        <div class="alert alert-info alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            Please check the form below for errors
                        </div>
                    @endif
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Profil Perusahaan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Perusahaan</a></li>
                            <li class="breadcrumb-item active">Profil</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Profil</h3>
                    </div>
                    <div class="card-body">
                        <form role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Nama Perusahaan</label>
                                        <input type="text" class="form-control" value="{{$perusahaan['nama_perusahaan']}}" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Posisi Koordinat</label>
                                        <input type="text" class="form-control" value="{{$perusahaan['posisi_perusahaan']}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Alamat Perusahaan</label>
                                        <textarea class="form-control" rows="3" placeholder="{{$perusahaan['alamat_perusahaan']}}" disabled></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Bidang Usaha</label>
                                        <input type="text" class="form-control" value="{{$perusahaan['bidang_usaha']}}" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>NPWP</label>
                                        <input type="text" class="form-control" value="{{$perusahaan['npwp']}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>NIB</label>
                                        <input type="text" class="form-control" value="{{$perusahaan['nib']}}" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Penanggung Jawab</label>
                                        <input type="text" class="form-control" value="{{$perusahaan['nama_pj']}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#editPerusahaan{{$perusahaan['id']}}"><i class="fas fa-edit"> Edit</i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-10">
                                <h3 class="card-title">Perencanaan</h3>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#editPerencanaan{{$perencanaan['id']}}"><i class="fas fa-edit"> Edit</i></button>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th colspan="2">Data</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td rowspan="11">1</td>
                                <td colspan="2">Kesesuaian Rencana Tata Ruang Wilayah</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Provinsi</td>
                                <td>{{$perencanaan['prov']}}</td>
                            </tr>
                            <tr>
                                <td>Nomor</td>
                                <td>{{$perencanaan['no_prov']}}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>{{$perencanaan['tgl_prov']}}</td>
                            </tr>
                            <tr>
                                <td>Perihal</td>
                                <td>{{$perencanaan['perihal_prov']}}</td>
                            </tr>
                            <tr>
                                <td>Instansi</td>
                                <td>{{$perencanaan['instansi_prov']}}</td>
                            </tr>

                            <tr>
                                <td style="font-weight: bold">Kabupaten/Kota</td>
                                <td>{{$perencanaan['kab_kota']}}</td>
                            </tr>
                            <tr>
                                <td>Nomor</td>
                                <td>{{$perencanaan['no_kab_kota']}}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>{{$perencanaan['tgl_kab_kota']}}</td>
                            </tr>
                            <tr>
                                <td>Perihal</td>
                                <td>{{$perencanaan['perihal_kab_kota']}}</td>
                            </tr>
                            <tr>
                                <td>Instansi</td>
                                <td>{{$perencanaan['instansi_kab_kota']}}</td>
                            </tr>

                            <tr>
                                <td rowspan="5">2</td>
                                <td colspan="2">Study Kajian Lingkungan Hidup</td>
                            </tr>
                            <tr>
                                <td>Nomor</td>
                                <td>{{$perencanaan['no_sklh']}}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>{{$perencanaan['tgl_sklh']}}</td>
                            </tr>
                            <tr>
                                <td>Perihal</td>
                                <td>{{$perencanaan['perihal_sklh']}}</td>
                            </tr>
                            <tr>
                                <td>Instansi</td>
                                <td>{{$perencanaan['instansi_sklh']}}</td>
                            </tr>

                            <tr>
                                <td rowspan="5">3</td>
                                <td colspan="2">Ijin Penetapan Lokasi</td>
                            </tr>
                            <tr>
                                <td>Nomor</td>
                                <td>{{$perencanaan['no_ipl']}}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>{{$perencanaan['tgl_ipl']}}</td>
                            </tr>
                            <tr>
                                <td>Perihal</td>
                                <td>{{$perencanaan['perihal_ipl']}}</td>
                            </tr>
                            <tr>
                                <td>Instansi</td>
                                <td>{{$perencanaan['instansi_ipl']}}</td>
                            </tr>

                            <tr>
                                <td rowspan="5">4</td>
                                <td colspan="2">Ijin Pembangunan Dan Pengoperasian</td>
                            </tr>
                            <tr>
                                <td>Nomor</td>
                                <td>{{$perencanaan['no_ipp']}}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>{{$perencanaan['tgl_ipp']}}</td>
                            </tr>
                            <tr>
                                <td>Perihal</td>
                                <td>{{$perencanaan['perihal_ipp']}}</td>
                            </tr>
                            <tr>
                                <td>Instansi</td>
                                <td>{{$perencanaan['instansi_ipp']}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-10">
                                <h3 class="card-title">Fasilitas Sarana Dan Prasarana</h3>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#editFasilitasDarat{{$fasilitas_darat['id']}}"><i class="fas fa-edit"> Edit</i></button>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th colspan="2">Nama Fasilitas</th>
                                <th>Jumlah</th>
                            </tr>
                            </thead>
                            <tbody>

                            <!-- A -->
                            <tr>
                                <td rowspan="24">A</td>
                                <td colspan="2">Faslitas Darat</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">1</td>
                                <td>Luas Darat</td>
                                <td>{{$fasilitas_darat['luas_darat']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">2</td>
                                <td>Perkantoran</td>
                                <td>{{$fasilitas_darat['perkantoran']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">3</td>
                                <td>Timbangan</td>
                                <td>{{$fasilitas_darat['timbangan']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">3</td>
                                <td>Tanki Timbu CPO 200 MT, 500 MT, 750 MT, 1000 MT, 1.500 MT, 2000 MT, 3000 MT</td>
                                <td>{{$fasilitas_darat['tanki_timbu_cpo']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">4</td>
                                <td>Bengkel</td>
                                <td>{{$fasilitas_darat['bengkel']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">5</td>
                                <td>Unit Pengelolaan Limbah Cair</td>
                                <td>{{$fasilitas_darat['uplc']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">6</td>
                                <td>Tempat Penimbunan Limbah B3</td>
                                <td>{{$fasilitas_darat['tplb3']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">7</td>
                                <td>Power Plan</td>
                                <td>{{$fasilitas_darat['power_plan']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">8</td>
                                <td>Tanki BBM</td>
                                <td>{{$fasilitas_darat['tanki_bbm']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">9</td>
                                <td>Tanki Air</td>
                                <td>{{$fasilitas_darat['tanki_air']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">9</td>
                                <td>Refeneri Dan Fraksinasi</td>
                                <td>{{$fasilitas_darat['refeneri']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">9</td>
                                <td>Tanki MFO</td>
                                <td>{{$fasilitas_darat['tanki_mfo']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">9</td>
                                <td>Bangunan Reserve Osmosis</td>
                                <td>{{$fasilitas_darat['bangunan_reserve']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">9</td>
                                <td>Cooling Tower</td>
                                <td>{{$fasilitas_darat['cooling_tower']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">10</td>
                                <td>Bangunan Utility</td>
                                <td>{{$fasilitas_darat['bangunan_utility']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">11</td>
                                <td>Gardu Listrik PLN</td>
                                <td>{{$fasilitas_darat['gardu_listrik_pln']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">12</td>
                                <td>Tempat Penimbunan Cangkang</td>
                                <td>{{$fasilitas_darat['tempat_penimbunan']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">13</td>
                                <td>Kantor Dan Pos Security</td>
                                <td>{{$fasilitas_darat['kantor_d_pos']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">14</td>
                                <td>Musholla Dan Kantin</td>
                                <td>{{$fasilitas_darat['musholla_d_kantin']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">15</td>
                                <td>Gudang Tertutup</td>
                                <td>{{$fasilitas_darat['gudang_tertutup']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">16</td>
                                <td>Gudang Terbuka</td>
                                <td>{{$fasilitas_darat['gudang_terbuka']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">17</td>
                                <td>MESS</td>
                                <td>{{$fasilitas_darat['mess']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">18</td>
                                <td>Kantor Bea Cukai, Karantina, KSOP, dan Imigrasi</td>
                                <td>{{$fasilitas_darat['kbkki']}}</td>
                            </tr>
                            </tbody>
                            <!-- /A -->
                        </table>
                    </div>

                    <!-- B -->
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#editFasilitasPerairan{{$fasilitas_perairan['id']}}"><i class="fas fa-edit"> Edit</i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th colspan="2">Nama Fasilitas</th>
                                <th>Jumlah</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td rowspan="14">B</td>
                                <td colspan="2">Faslitas Perairan Spesifikasi Dermaga</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">1</td>
                                <td>Type</td>
                                <td>{{$fasilitas_perairan['type']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">2</td>
                                <td>Ukuran</td>
                                <td>{{$fasilitas_perairan['ukuran']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">3</td>
                                <td>Breasting Dolphin</td>
                                <td>{{$fasilitas_perairan['breasting_dolphin']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">4</td>
                                <td>Mooring Dolphin</td>
                                <td>{{$fasilitas_perairan['mooring_dolphin']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">5</td>
                                <td>Trestle</td>
                                <td>{{$fasilitas_perairan['trestle']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">6</td>
                                <td>Cause Way</td>
                                <td>{{$fasilitas_perairan['cause_way']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">7</td>
                                <td>Catwalk</td>
                                <td>{{$fasilitas_perairan['catwalk']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">7</td>
                                <td>Kontruksi</td>
                                <td>{{$fasilitas_perairan['kontruksi']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">8</td>
                                <td>Peruntukan</td>
                                <td>{{$fasilitas_perairan['peruntukan']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">9</td>
                                <td>Kedalaman</td>
                                <td>{{$fasilitas_perairan['kedalaman']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">10</td>
                                <td>Koordinat</td>
                                <td>{{$fasilitas_perairan['koordinat']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">11</td>
                                <td>Fender</td>
                                <td>{{$fasilitas_perairan['type']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">12</td>
                                <td>Bollar</td>
                                <td>{{$fasilitas_perairan['bollar']}}</td>
                            </tr>
                            <!-- /B -->
                            </tbody>
                        </table>
                    </div>

                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#editFasilitasDLKRDLKP{{$fasilitas_sarana['id']}}"><i class="fas fa-edit"> Edit</i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <!-- C -->
                            <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th colspan="2">DLKR Dan DLKP</th>
                                <th>Posisi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td rowspan="3">C</td>
                                <td colspan="2">Daerah Lingkungan Kerja Daratan dan Daerah Lingkungan Kerja Perairan</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">1</td>
                                <td>Daerah Lingkungan Kerja Daratan Tertentu Pada Titik Koordinat Geografis</td>
                                <td>
                                    <p>{{$dlkr[0]}}</p>
                                    <p>{{$dlkr[1]}}</p>
                                    <p>{{$dlkr[2]}}</p>
                                    <p>{{$dlkr[3]}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">2</td>
                                <td>Daerah Lingkungan Kepentingan Kerja Perairan Tertentu Pada Titik Koordinat Geografis</td>
                                <td>
                                    <p>{{$dlkp[0]}}</p>
                                    <p>{{$dlkp[1]}}</p>
                                    <p>{{$dlkp[2]}}</p>
                                    <p>{{$dlkp[3]}}</p>
                                </td>
                            </tr>
                            </tbody>
                            <!-- /C -->
                        </table>
                    </div>

                    <!-- D -->
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#editFasilitasPeralatan{{$fasilitas_peralatan['id']}}"><i class="fas fa-edit"> Edit</i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th colspan="2">Nama Fasilitas</th>
                                <th>Kapasitas</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td rowspan="14">D</td>
                                <td colspan="2">Peralatan Bongkar Muat</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="width: 10px;; text-align: center">1</td>
                                <td>Harbour Mobile Crene</td>
                                <td>{{$fasilitas_peralatan['hmc']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">2</td>
                                <td>Terminal Tractor</td>
                                <td>{{$fasilitas_peralatan['terminal_tractor']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">3</td>
                                <td>Skeletal Trailer 40'</td>
                                <td>{{$fasilitas_peralatan['st40']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">4</td>
                                <td>Primer Movers</td>
                                <td>{{$fasilitas_peralatan['primer_movers']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">5</td>
                                <td>Flattop Trailer</td>
                                <td>{{$fasilitas_peralatan['flattop_trailer']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">6</td>
                                <td>Trailer 20"</td>
                                <td>{{$fasilitas_peralatan['trailer20']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">7</td>
                                <td>Flexible Hose</td>
                                <td>{{$fasilitas_peralatan['flexible_hose']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">8</td>
                                <td>Pipe Line</td>
                                <td>{{$fasilitas_peralatan['pipe_line']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">9</td>
                                <td>Loader</td>
                                <td>{{$fasilitas_peralatan['loader']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">10</td>
                                <td>Shore Crane</td>
                                <td>{{$fasilitas_peralatan['shore_crane']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">11</td>
                                <td>Excavator</td>
                                <td>{{$fasilitas_peralatan['excavator']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">12</td>
                                <td>Dump Truck</td>
                                <td>{{$fasilitas_peralatan['dump_truck']}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px; text-align: center">13</td>
                                <td>Forklit</td>
                                <td>{{$fasilitas_peralatan['forklift']}}</td>
                            </tr>
                            <!-- /D -->
                            </tbody>
                        </table>
                    </div>

                    <!-- E -->
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#editFasilitasSarana{{$fasilitas_sarana['id']}}"><i class="fas fa-edit"> Edit</i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th colspan="2">Nama Sarana Bantu Navigasi</th>
                                <th>Jumlah</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td rowspan="2">E</td>
                                <td colspan="2">Sarana Bantu Navigasi Pelayaran</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2">Lampu Suar</td>
                                <td>{{$fasilitas_sarana['lampu_suar']}}</td>
                            </tr>
                            </tbody>
                            <!-- /E -->

                            <!-- F -->
                            <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th colspan="2">Nama Fasilitas</th>
                                <th>Jumlah</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td rowspan="2">F</td>
                                <td colspan="2">Stasion Radio Operasi Pantai</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2">Handy Talky</td>
                                <td>{{$fasilitas_sarana['handy_talky']}}</td>
                            </tr>
                            </tbody>
                            <!-- /F -->
                        </table>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- Modal Edit Perusahaan -->
    <div class="modal fade" id="editPerusahaan{{$perusahaan['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Perusahaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= url('/') ?>/tukstersus/editTuksTersus/{{$perusahaan->id}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <div class="input-group mb-3">
                                <input name="nama_perusahaan" type="text" class="form-control" value="{{$perusahaan->nama_perusahaan}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <div class="input-group mb-3">
                                <input name="alamat_perusahaan" type="text" class="form-control" value="{{$perusahaan->alamat_perusahaan}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Bidang Usaha</label>
                            <div class="input-group mb-3">
                                <input name="bidang_usaha" type="text" class="form-control" value="{{$perusahaan->bidang_usaha}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>NPWP</label>
                            <div class="input-group mb-3">
                                <input name="npwp" type="text" class="form-control" value="{{$perusahaan->npwp}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>NIB</label>
                            <div class="input-group mb-3">
                                <input name="nib" type="text" class="form-control" value="{{$perusahaan->nib}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Penanggung Jawab</label>
                            <div class="input-group mb-3">
                                <input name="nama_pj" type="text" class="form-control" value="{{$perusahaan->nama_pj}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Posisi Koordinat</label>
                            <div class="input-group mb-3">
                                <input name="posisi_perusahaan" type="text" class="form-control" value="{{$perusahaan->posisi_perusahaan}}" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /End Modal Edit Pelabuhan -->

    <!-- Modal Edit Perencanaan -->
    <div class="modal fade" id="editPerencanaan{{$perencanaan['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Perencanaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= url('/') ?>/tukstersus/editPerencanaan/{{$perencanaan->id}}" method="post">
                        {{csrf_field()}}
                        <label>Kesesuaian Rencana Tata Ruang Wilayah</label>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <div class="input-group mb-3">
                                <input name="prov" type="text" class="form-control" value="{{$perencanaan->prov}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nomor</label>
                            <div class="input-group mb-3">
                                <input name="no_prov" type="text" class="form-control" value="{{$perencanaan->no_prov}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-group mb-3">
                                <input name="tgl_prov" type="date" class="form-control" value="{{$perencanaan->tgl_prov}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Perihal</label>
                            <div class="input-group mb-3">
                                <input name="perihal_prov" type="text" class="form-control" value="{{$perencanaan->perihal_prov}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                            <div class="input-group mb-3">
                                <input name="instansi_prov" type="text" class="form-control" value="{{$perencanaan->instansi_prov}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kabupaten/Kota</label>
                            <div class="input-group mb-3">
                                <input name="kab_kota" type="text" class="form-control" value="{{$perencanaan->kab_kota}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nomor</label>
                            <div class="input-group mb-3">
                                <input name="no_kab_kota" type="text" class="form-control" value="{{$perencanaan->no_kab_kota}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-group mb-3">
                                <input name="tgl_kab_kota" type="date" class="form-control" value="{{$perencanaan->tgl_kab_kota}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Perihal</label>
                            <div class="input-group mb-3">
                                <input name="perihal_kab_kota" type="text" class="form-control" value="{{$perencanaan->perihal_kab_kota}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                            <div class="input-group mb-3">
                                <input name="instansi_kab_kota" type="text" class="form-control" value="{{$perencanaan->instansi_kab_kota}}">
                            </div>
                        </div>
                        <label>Study Kajian Lingkungan Hidup</label>
                        <div class="form-group">
                            <label>Nomor</label>
                            <div class="input-group mb-3">
                                <input name="no_sklh" type="text" class="form-control" value="{{$perencanaan->no_sklh}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-group mb-3">
                                <input name="tgl_sklh" type="date" class="form-control" value="{{$perencanaan->tgl_sklh}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Perihal</label>
                            <div class="input-group mb-3">
                                <input name="perihal_sklh" type="text" class="form-control" value="{{$perencanaan->perihal_sklh}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                            <div class="input-group mb-3">
                                <input name="instansi_sklh" type="text" class="form-control" value="{{$perencanaan->instansi_sklh}}">
                            </div>
                        </div>
                        <label>Ijin Penetapan Lokasi</label>
                        <div class="form-group">
                            <label>Nomor</label>
                            <div class="input-group mb-3">
                                <input name="no_ipl" type="text" class="form-control" value="{{$perencanaan->no_ipl}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-group mb-3">
                                <input name="tgl_ipl" type="date" class="form-control" value="{{$perencanaan->tgl_ipl}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Perihal</label>
                            <div class="input-group mb-3">
                                <input name="perihal_ipl" type="text" class="form-control" value="{{$perencanaan->perihal_ipl}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                            <div class="input-group mb-3">
                                <input name="instansi_ipl" type="text" class="form-control" value="{{$perencanaan->instansi_ipl}}">
                            </div>
                        </div>
                        <label>Ijin Pembangunan Dan Pengoperasian</label>
                        <div class="form-group">
                            <label>Nomor</label>
                            <div class="input-group mb-3">
                                <input name="no_ipp" type="text" class="form-control" value="{{$perencanaan->no_ipp}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-group mb-3">
                                <input name="tgl_ipp" type="date" class="form-control" value="{{$perencanaan->tgl_ipp}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Perihal</label>
                            <div class="input-group mb-3">
                                <input name="perihal_ipp" type="text" class="form-control" value="{{$perencanaan->perihal_ipp}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                            <div class="input-group mb-3">
                                <input name="instansi_ipp" type="text" class="form-control" value="{{$perencanaan->instansi_ipp}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /End Modal Edit Pelabuhan -->

    <!-- Modal Edit Fasilitas Darat -->
    <div class="modal fade" id="editFasilitasDarat{{$fasilitas_darat['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Fasilitas Darat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= url('/') ?>/tukstersus/editFasilitasDarat/{{$fasilitas_darat->id}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Luas Darat</label>
                            <div class="input-group mb-3">
                                <input name="luas_darat" type="number" class="form-control" value="{{$fasilitas_darat->luas_darat}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Perkantoran</label>
                            <div class="input-group mb-3">
                                <input name="perkantoran" type="number" class="form-control" value="{{$fasilitas_darat->perkantoran}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Timbangan</label>
                            <div class="input-group mb-3">
                                <input name="timbangan" type="number" class="form-control" value="{{$fasilitas_darat->timbangan}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanki Timbu CPO 200 MT, 500 MT, 750 MT, 1000 MT, 1.500 MT, 2000 MT, 3000 MT</label>
                            <div class="input-group mb-3">
                                <input name="tanki_timbu_cpo" type="number" class="form-control" value="{{$fasilitas_darat->tanki_timbu_cpo}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Bengkel</label>
                            <div class="input-group mb-3">
                                <input name="bengkel" type="number" class="form-control" value="{{$fasilitas_darat->bengkel}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Unit Pengelolaan Limbah Cair</label>
                            <div class="input-group mb-3">
                                <input name="uplc" type="number" class="form-control" value="{{$fasilitas_darat->uplc}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tempat Penimbunan Limbah B3</label>
                            <div class="input-group mb-3">
                                <input name="tplb3" type="number" class="form-control" value="{{$fasilitas_darat->tplb3}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Power Plan</label>
                            <div class="input-group mb-3">
                                <input name="power_plan" type="number" class="form-control" value="{{$fasilitas_darat->power_plan}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanki BBM</label>
                            <div class="input-group mb-3">
                                <input name="tanki_bbm" type="number" class="form-control" value="{{$fasilitas_darat->tanki_bbm}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanki Air</label>
                            <div class="input-group mb-3">
                                <input name="tanki_air" type="number" class="form-control" value="{{$fasilitas_darat->tanki_air}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Refeneri Dan Fraksinasi</label>
                            <div class="input-group mb-3">
                                <input name="refeneri" type="number" class="form-control" value="{{$fasilitas_darat->refeneri}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanki MFO</label>
                            <div class="input-group mb-3">
                                <input name="tanki_mfo" type="number" class="form-control" value="{{$fasilitas_darat->tanki_mfo}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Bangunan Reserve Osmosis</label>
                            <div class="input-group mb-3">
                                <input name="bangunan_reserve" type="number" class="form-control" value="{{$fasilitas_darat->bangunan_reserve}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Cooling Tower</label>
                            <div class="input-group mb-3">
                                <input name="cooling_tower" type="number" class="form-control" value="{{$fasilitas_darat->cooling_tower}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Bangunan Utility</label>
                            <div class="input-group mb-3">
                                <input name="bangunan_utility" type="number" class="form-control" value="{{$fasilitas_darat->bangunan_utility}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Gardu Listrik PLN</label>
                            <div class="input-group mb-3">
                                <input name="gardu_listrik_pln" type="number" class="form-control" value="{{$fasilitas_darat->gardu_listrik_pln}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tempat Penimbunan Cangkang</label>
                            <div class="input-group mb-3">
                                <input name="tempat_penimbunan" type="number" class="form-control" value="{{$fasilitas_darat->tempat_penimbunan}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kantor Dan Pos Security</label>
                            <div class="input-group mb-3">
                                <input name="kantor_d_pos" type="text" class="form-control" value="{{$fasilitas_darat->kantor_d_pos}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Musholla Dan Kantin</label>
                            <div class="input-group mb-3">
                                <input name="musholla_d_kantin" type="text" class="form-control" value="{{$fasilitas_darat->musholla_d_kantin}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Gudang Tertutup</label>
                            <div class="input-group mb-3">
                                <input name="gudang_tertutup" type="number" class="form-control" value="{{$fasilitas_darat->gudang_tertutup}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Gudang Terbuka</label>
                            <div class="input-group mb-3">
                                <input name="gudang_terbuka" type="number" class="form-control" value="{{$fasilitas_darat->gudang_terbuka}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>MESS</label>
                            <div class="input-group mb-3">
                                <input name="mess" type="number" class="form-control" value="{{$fasilitas_darat->mess}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kantor Bea Cukai, Karantina, KSOP Dan Imigrasi</label>
                            <div class="input-group mb-3">
                                <input name="kbkki" type="number" class="form-control" value="{{$fasilitas_darat->kbkki}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /End Modal Edit Fasilitas Darat -->

    <!-- Modal Edit Fasilitas Perairan -->
    <div class="modal fade" id="editFasilitasPerairan{{$fasilitas_perairan['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Fasilitas Perairan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= url('/') ?>/tukstersus/editFasilitasPerairan/{{$fasilitas_perairan->id}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Type</label>
                            <div class="input-group mb-3">
                                <input name="type" type="text" class="form-control" value="{{$fasilitas_perairan->type}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ukuran</label>
                            <div class="input-group mb-3">
                                <input name="ukuran" type="number" class="form-control" value="{{$fasilitas_perairan->perkantoran}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Breasting Dolphin</label>
                            <div class="input-group mb-3">
                                <input name="breasting_dolphin" type="number" class="form-control" value="{{$fasilitas_perairan->breasting_dolphin}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mooring Dolphin</label>
                            <div class="input-group mb-3">
                                <input name="mooring_dolphin" type="number" class="form-control" value="{{$fasilitas_perairan->mooring_dolphin}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Trestle</label>
                            <div class="input-group mb-3">
                                <input name="trestle" type="number" class="form-control" value="{{$fasilitas_perairan->trestle}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Cause Way</label>
                            <div class="input-group mb-3">
                                <input name="cause_way" type="number" class="form-control" value="{{$fasilitas_perairan->cause_way}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Catwalk</label>
                            <div class="input-group mb-3">
                                <input name="catwalk" type="number" class="form-control" value="{{$fasilitas_perairan->catwalk}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kontruksi</label>
                            <div class="input-group mb-3">
                                <input name="kontruksi" type="number" class="form-control" value="{{$fasilitas_perairan->kontruksi}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Peruntukan</label>
                            <div class="input-group mb-3">
                                <input name="peruntukan" type="number" class="form-control" value="{{$fasilitas_darat->peruntukan}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kedalaman</label>
                            <div class="input-group mb-3">
                                <input name="kedalaman" type="number" class="form-control" value="{{$fasilitas_darat->kedalaman}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Koordinat</label>
                            <div class="input-group mb-3">
                                <input name="koordinat" type="number" class="form-control" value="{{$fasilitas_darat->koordinat}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Fender</label>
                            <div class="input-group mb-3">
                                <input name="fender" type="number" class="form-control" value="{{$fasilitas_darat->fender}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Bollar</label>
                            <div class="input-group mb-3">
                                <input name="bollar" type="number" class="form-control" value="{{$fasilitas_darat->bollar}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /End Modal Edit Fasilitas Perairan -->

    <!-- Modal Edit Fasilitas DLKR DLKP -->
    <div class="modal fade" id="editFasilitasDLKRDLKP{{$fasilitas_sarana['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Fasilitas DLKR Dan DLKP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= url('/') ?>/tukstersus/editFasilitasDLKRDLKP/{{$fasilitas_sarana->id}}" method="post">
                        {{csrf_field()}}
                        <label>Daerah Lingkungan Kerja Daratan Tertentu Pada Titik Koordinat Georafis</label>
                        <div class="form-group">
                            <label>Koordinat 1</label>
                            <div class="input-group mb-3">
                                <input name="dlkr[0]" type="text" class="form-control" value="{{$dlkr['0']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Koordinat 2</label>
                            <div class="input-group mb-3">
                                <input name="dlkr[1]" type="text" class="form-control" value="{{$dlkr['1']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Koordinat 3</label>
                            <div class="input-group mb-3">
                                <input name="dlkr[2]" type="text" class="form-control" value="{{$dlkr['2']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Koordinat 4</label>
                            <div class="input-group mb-3">
                                <input name="dlkr[3]" type="text" class="form-control" value="{{$dlkr['3']}}">
                            </div>
                        </div>
                        <label>Daerah Lingkungan Kepentingan Kerja Perairan Tertentu Pada Titik Koordinat Geografis</label>
                        <div class="form-group">
                            <label>Koordinat 1</label>
                            <div class="input-group mb-3">
                                <input name="dlkp[0]" type="text" class="form-control" value="{{$dlkp['0']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Koordinat 2</label>
                            <div class="input-group mb-3">
                                <input name="dlkp[1]" type="text" class="form-control" value="{{$dlkp['1']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Koordinat 3</label>
                            <div class="input-group mb-3">
                                <input name="dlkp[2]" type="text" class="form-control" value="{{$dlkp['2']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Koordinat 4</label>
                            <div class="input-group mb-3">
                                <input name="dlkp[3]" type="text" class="form-control" value="{{$dlkp['3']}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /End Modal Edit Fasilitas DLKR DLKP -->

    <!-- Modal Edit Fasilitas Peralatan -->
    <div class="modal fade" id="editFasilitasPeralatan{{$fasilitas_peralatan['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Fasilitas Peralatan Bongkar Muat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= url('/') ?>/tukstersus/editFasilitasPeralatan/{{$fasilitas_peralatan->id}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Harbour Mobile Crene</label>
                            <div class="input-group mb-3">
                                <input name="hmc" type="number" class="form-control" value="{{$fasilitas_peralatan->hmc}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Terminal Tractor</label>
                            <div class="input-group mb-3">
                                <input name="terminal_tractor" type="number" class="form-control" value="{{$fasilitas_peralatan->terminal_tractor}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Skeletal Trainer 40'</label>
                            <div class="input-group mb-3">
                                <input name="st40" type="number" class="form-control" value="{{$fasilitas_peralatan->st40}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Primer Movers</label>
                            <div class="input-group mb-3">
                                <input name="primer_movers" type="number" class="form-control" value="{{$fasilitas_peralatan->primer_movers}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Flattop Trailer</label>
                            <div class="input-group mb-3">
                                <input name="flattop_trailer" type="number" class="form-control" value="{{$fasilitas_peralatan->flattop_trailer}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Trailer 20"</label>
                            <div class="input-group mb-3">
                                <input name="trailer20" type="number" class="form-control" value="{{$fasilitas_perairan->trailer20}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Flexible Hose</label>
                            <div class="input-group mb-3">
                                <input name="flexible_hose" type="number" class="form-control" value="{{$fasilitas_peralatan->flexible_hose}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pipe Line</label>
                            <div class="input-group mb-3">
                                <input name="pipe_line" type="number" class="form-control" value="{{$fasilitas_peralatan->pipe_line}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Loader</label>
                            <div class="input-group mb-3">
                                <input name="loader" type="number" class="form-control" value="{{$fasilitas_peralatan->loader}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Shore Crane</label>
                            <div class="input-group mb-3">
                                <input name="shore_crane" type="number" class="form-control" value="{{$fasilitas_peralatan->shore_crane}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Excavator</label>
                            <div class="input-group mb-3">
                                <input name="excavator" type="number" class="form-control" value="{{$fasilitas_peralatan->excavator}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Dump Truck</label>
                            <div class="input-group mb-3">
                                <input name="dump_truck" type="number" class="form-control" value="{{$fasilitas_peralatan->dump_truck}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Forklift</label>
                            <div class="input-group mb-3">
                                <input name="forklift" type="number" class="form-control" value="{{$fasilitas_peralatan->forklift}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /End Modal Edit Fasilitas Peralatan -->

    <!-- Modal Edit Fasilitas Sarana -->
    <div class="modal fade" id="editFasilitasSarana{{$fasilitas_sarana['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Fasilitas Sarana Dan Stasion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= url('/') ?>/tukstersus/editFasilitasSarana/{{$fasilitas_sarana->id}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Lampu Suar</label>
                            <div class="input-group mb-3">
                                <input name="lampu_suar" type="number" class="form-control" value="{{$fasilitas_sarana->lampu_suar}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Handy Talky</label>
                            <div class="input-group mb-3">
                                <input name="handy_talky" type="number" class="form-control" value="{{$fasilitas_peralatan->handy_talky}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /End Modal Edit Fasilitas Sarana -->
@endsection
