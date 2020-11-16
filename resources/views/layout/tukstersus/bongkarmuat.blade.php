@section('title')
    SIMOPEL-Riau | Bongkar Muat
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
                        <h1 class="m-0 text-dark">Bongkar Muat</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                            <li class="breadcrumb-item active">Bongkar Muat</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Bongkar Muat</h3>
                    </div>
                    <!-- /.Button -->
                    <div class="row" style="margin-top: 10px; margin-right: 10px; margin-left: 10px">
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#tambahData"><i class="fas fa-plus"> Tambah Data</i></button>
                            <!-- Modal -->
                            <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Bongkar Muat</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= url('/') ?>/tukstersus/tambahBongkarMuatTuksTersus" method="post">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Nama Perusahaan</label>
                                                    <div class="input-group mb-3">
                                                        <input name="nama_perusahaan" type="text" class="form-control" placeholder="Nama Perusahaan" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Kapal</label>
                                                    <div class="input-group mb-3">
                                                        <input name="nama_kapal" type="text" class="form-control" placeholder="Nama Kapal" required>
                                                    </div>
                                                </div>
                                                <!-- Angkutan Dalam Negeri -->
                                                <label>Angkutan Dalam Negeri</label>
                                                <label>Bongkar</label>
                                                <label>Waktu Bongkar</label>
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_b_tgl" type="date" class="form-control" placeholder="Tanggal" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Lama Bongkar</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_b_lb" type="text" class="form-control" placeholder="Lama Bongkar" required>
                                                    </div>
                                                </div>
                                                <label>Dalam Negeri (Antar Pulau)</label>
                                                <div class="form-group">
                                                    <label>Penumpang Turun (Orang)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_b_pt" type="number" class="form-control" placeholder="Penumpang Turun" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Hewan (Ekor)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_b_hewan" type="number" class="form-control" placeholder="Hewan" required>
                                                    </div>
                                                </div>
                                                <label>Jenis Muatan</label>
                                                <div class="form-group">
                                                    <label>Peti Kemas</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_b_peti" type="number" class="form-control" placeholder="Peti Kemas" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_b_jumlah" type="number" class="form-control" placeholder="Jumlah" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Barang</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_b_barang" type="number" class="form-control" placeholder="Barang" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Volume (Ton/M3)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_b_volume" type="number" class="form-control" placeholder="Volume (Ton/M3)" required>
                                                    </div>
                                                </div>
                                                <label>Muat</label>
                                                <label>Waktu Muat</label>
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_m_tgl" type="date" class="form-control" placeholder="Tanggal" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Lama Muat</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_m_lm" type="text" class="form-control" placeholder="Lama Muat" required>
                                                    </div>
                                                </div>
                                                <label>Dalam Negeri (Antar Pulau)</label>
                                                <div class="form-group">
                                                    <label>Penumpang Naik (Orang)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_m_pn" type="number" class="form-control" placeholder="Penumpang Naik" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Hewan (Ekor)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_m_hewan" type="number" class="form-control" placeholder="Hewan" required>
                                                    </div>
                                                </div>
                                                <label>Jenis Muatan</label>
                                                <div class="form-group">
                                                    <label>Peti Kemas</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_m_peti" type="number" class="form-control" placeholder="Peti Kemas" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_m_jumlah" type="number" class="form-control" placeholder="Jumlah" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Barang</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_m_barang" type="number" class="form-control" placeholder="Barang" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Volume (Ton/M3)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="adn_m_volume" type="number" class="form-control" placeholder="Volume (Ton/M3)" required>
                                                    </div>
                                                </div>
                                                <!-- / Angkutan Dalam Negeri -->

                                                <!-- Angkutan Luar Negeri -->
                                                <label>Angkutan Luar Negeri</label>
                                                <label>Bongkar</label>
                                                <label>Waktu Bongkar</label>
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_b_tgl" type="date" class="form-control" placeholder="Tanggal" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Lama Bongkar</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_b_lb" type="text" class="form-control" placeholder="Lama Bongkar" required>
                                                    </div>
                                                </div>
                                                <label>Import</label>
                                                <div class="form-group">
                                                    <label>Penumpang Turun (Orang)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_b_pt" type="number" class="form-control" placeholder="Penumpang Turun" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Hewan (Ekor)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_b_hewan" type="number" class="form-control" placeholder="Hewan" required>
                                                    </div>
                                                </div>
                                                <label>Jenis Muatan</label>
                                                <div class="form-group">
                                                    <label>Peti Kemas</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_b_peti" type="number" class="form-control" placeholder="Peti Kemas" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_b_jumlah" type="number" class="form-control" placeholder="Jumlah" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Barang</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_b_barang" type="number" class="form-control" placeholder="Barang" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Volume (Ton/M3)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_b_volume" type="number" class="form-control" placeholder="Volume (Ton/M3)" required>
                                                    </div>
                                                </div>
                                                <label>Muat</label>
                                                <label>Waktu Muat</label>
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_m_tgl" type="date" class="form-control" placeholder="Tanggal" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Lama Muat</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_m_lm" type="text" class="form-control" placeholder="Lama Muat" required>
                                                    </div>
                                                </div>
                                                <label>Export</label>
                                                <div class="form-group">
                                                    <label>Penumpang Naik (Orang)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_m_pn" type="number" class="form-control" placeholder="Penumpang Naik" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Hewan (Ekor)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_m_hewan" type="number" class="form-control" placeholder="Hewan" required>
                                                    </div>
                                                </div>
                                                <label>Jenis Muatan</label>
                                                <div class="form-group">
                                                    <label>Peti Kemas</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_m_peti" type="number" class="form-control" placeholder="Peti Kemas" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_m_jumlah" type="number" class="form-control" placeholder="Jumlah" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Barang</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_m_barang" type="number" class="form-control" placeholder="Barang" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Volume (Ton/M3)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="aln_m_volume" type="number" class="form-control" placeholder="Volume (Ton/M3)" required>
                                                    </div>
                                                </div>
                                                <!-- / Angkutan Luar Negeri -->

                                                <div class="form-group">
                                                    <label>Keterangan</label>
                                                    <div class="input-group mb-3">
                                                        <input name="ket" type="text" class="form-control" placeholder="Keterangan" required>
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
                            <!-- End Modal -->
                        </div>
                        <div class="col-sm-8"></div>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#cetakPDFBulanan" style="margin-bottom: 10px"><i class="fas fa-file-pdf"> Cetak PDF Bulanan</i></button>
                            <!-- Modal -->
                            <div class="modal fade" id="cetakPDFBulanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Cetak PDF Bulanan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= url('/') ?>/tukstersus/cetakPDFBulananBongkarMuat" method="post" >
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Bulan Dan Tahun</label>
                                                    <div class="input-group date">
                                                        <input name="pickbulan" type="text" class="form-control pull-right" id="pickbulan" placeholder="mm/yyyy" autocomplete="off" required>
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                                <!-- /.form group -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                            <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#cetakPDFTahunan"><i class="fas fa-file-pdf"> Cetak PDF Tahunan</i></button>
                            <!-- Modal -->
                            <div class="modal fade" id="cetakPDFTahunan" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Cetak PDF Tahunan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= url('/') ?>/tukstersus/cetakPDFTahunanBongkarMuat" method="post" >
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Tahun</label>
                                                    <div class="input-group date">
                                                        <input name="picktahun" type="text" class="form-control pull-right" id="picktahun" placeholder="yyyy" autocomplete="off" required>
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                                <!-- /.form group -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="card-body table-responsive p-0" style="height: auto;">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px" rowspan="5">No</th>
                                    <th rowspan="5">Nama Perusahaan</th>
                                    <th rowspan="5">Nama Kapal</th>
                                    <th colspan="18">Angkutan Dalam Negeri</th>
                                    <th colspan="18">Angkutan Luar Negeri</th>
                                    <th rowspan="5">Keterangan</th>
                                    <th rowspan="5">Aksi</th>
                                </tr>
                                <tr>
                                    <th colspan="9">Bongkar</th>
                                    <th colspan="9">Muat</th>
                                    <th colspan="9">Bongkar</th>
                                    <th colspan="9">Muat</th>
                                </tr>
                                <tr>
                                    <th colspan="3">Waktu Bongkar</th>
                                    <th colspan="6">Dalam Negeri (Antar Pulau)</th>
                                    <th colspan="3">Waktu Muat</th>
                                    <th colspan="6">Dalam Negeri (Antar Pulau)</th>
                                    <th colspan="3">Waktu Bongkar</th>
                                    <th colspan="6">Import</th>
                                    <th colspan="3">Waktu Muat</th>
                                    <th colspan="6">Export</th>
                                </tr>
                                <tr>
                                    <th rowspan="2">Hari</th>
                                    <th rowspan="2">Tanggal</th>
                                    <th rowspan="2">Lama Bongkar</th>
                                    <th rowspan="2">Penumpang Turun (Orang)</th>
                                    <th rowspan="2">Hewan (Ekor)</th>
                                    <th colspan="4">Jenis Muatan</th>
                                    <th rowspan="2">Hari</th>
                                    <th rowspan="2">Tanggal</th>
                                    <th rowspan="2">Lama Muat</th>
                                    <th rowspan="2">Penumpang Naik (Orang)</th>
                                    <th rowspan="2">Hewan (Ekor)</th>
                                    <th colspan="4">Jenis Muatan</th>
                                    <th rowspan="2">Hari</th>
                                    <th rowspan="2">Tanggal</th>
                                    <th rowspan="2">Lama Bongkar</th>
                                    <th rowspan="2">Penumpang Turun (Orang)</th>
                                    <th rowspan="2">Hewan (Ekor)</th>
                                    <th colspan="4">Jenis Muatan</th>
                                    <th rowspan="2">Hari</th>
                                    <th rowspan="2">Tanggal</th>
                                    <th rowspan="2">Lama Muat</th>
                                    <th rowspan="2">Penumpang Naik (Orang)</th>
                                    <th rowspan="2">Hewan (Ekor)</th>
                                    <th colspan="4">Jenis Muatan</th>
                                </tr>
                                <tr>
                                    <th>Peti Kemas</th>
                                    <th>Jumlah</th>
                                    <th>Barang</th>
                                    <th>Volume (Ton/M3)</th>
                                    <th>Peti Kemas</th>
                                    <th>Jumlah</th>
                                    <th>Barang</th>
                                    <th>Volume (Ton/M3)</th>
                                    <th>Peti Kemas</th>
                                    <th>Jumlah</th>
                                    <th>Barang</th>
                                    <th>Volume (Ton/M3)</th>
                                    <th>Peti Kemas</th>
                                    <th>Jumlah</th>
                                    <th>Barang</th>
                                    <th>Volume (Ton/M3)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 0;
                                foreach ($bongkarmuat_list as $bongkarmuat):
                                $no++;
                                ?>
                                <tr>
                                    <td style="width: 10px">{{ $no }}</td>
                                    <td>{{$bongkarmuat->nama_perusahaan}}</td>
                                    <td>{{$bongkarmuat->nama_kapal}}</td>
                                    <?php
                                    $adn_b_tgl = \Carbon\Carbon::parse($bongkarmuat->adn_b_tgl)->format('D');
                                    $adn_b_tgl = str_replace('Sun', 'Minggu', $adn_b_tgl);
                                    $adn_b_tgl = str_replace('Mon', 'Senin', $adn_b_tgl);
                                    $adn_b_tgl = str_replace('Tue', 'Selasa', $adn_b_tgl);
                                    $adn_b_tgl = str_replace('Wed', 'Rabu', $adn_b_tgl);
                                    $adn_b_tgl = str_replace('Thu', 'Kamis', $adn_b_tgl);
                                    $adn_b_tgl = str_replace('Fri', 'Jumat', $adn_b_tgl);
                                    $adn_b_tgl = str_replace('Sat', 'Sabtu', $adn_b_tgl);
                                    ?>
                                    <td>{{$adn_b_tgl}}</td>
                                    <td>{{\Carbon\Carbon::parse($bongkarmuat->adn_b_tgl)->format('d/m/Y')}}</td>
                                    <td>{{$bongkarmuat->adn_b_lb}}</td>
                                    <td>{{$bongkarmuat->adn_b_pt}}</td>
                                    <td>{{$bongkarmuat->adn_b_hewan}}</td>
                                    <td>{{$bongkarmuat->adn_b_peti}}</td>
                                    <td>{{$bongkarmuat->adn_b_jumlah}}</td>
                                    <td>{{$bongkarmuat->adn_b_barang}}</td>
                                    <td>{{$bongkarmuat->adn_b_volume}}</td>
                                    <?php
                                    $adn_m_tgl = \Carbon\Carbon::parse($bongkarmuat->adn_m_tgl)->format('D');
                                    $adn_m_tgl = str_replace('Sun', 'Minggu', $adn_m_tgl);
                                    $adn_m_tgl = str_replace('Mon', 'Senin', $adn_m_tgl);
                                    $adn_m_tgl = str_replace('Tue', 'Selasa', $adn_m_tgl);
                                    $adn_m_tgl = str_replace('Wed', 'Rabu', $adn_m_tgl);
                                    $adn_m_tgl = str_replace('Thu', 'Kamis', $adn_m_tgl);
                                    $adn_m_tgl = str_replace('Fri', 'Jumat', $adn_m_tgl);
                                    $adn_m_tgl = str_replace('Sat', 'Sabtu', $adn_m_tgl);
                                    ?>
                                    <td>{{$adn_m_tgl}}</td>
                                    <td>{{\Carbon\Carbon::parse($bongkarmuat->adn_m_tgl)->format('d/m/Y')}}</td>
                                    <td>{{$bongkarmuat->adn_m_lm}}</td>
                                    <td>{{$bongkarmuat->adn_m_pn}}</td>
                                    <td>{{$bongkarmuat->adn_m_hewan}}</td>
                                    <td>{{$bongkarmuat->adn_m_peti}}</td>
                                    <td>{{$bongkarmuat->adn_m_jumlah}}</td>
                                    <td>{{$bongkarmuat->adn_m_barang}}</td>
                                    <td>{{$bongkarmuat->adn_m_volume}}</td>
                                    <?php
                                    $aln_b_tgl = \Carbon\Carbon::parse($bongkarmuat->aln_b_tgl)->format('D');
                                    $aln_b_tgl = str_replace('Sun', 'Minggu', $aln_b_tgl);
                                    $aln_b_tgl = str_replace('Mon', 'Senin', $aln_b_tgl);
                                    $aln_b_tgl = str_replace('Tue', 'Selasa', $aln_b_tgl);
                                    $aln_b_tgl = str_replace('Wed', 'Rabu', $aln_b_tgl);
                                    $aln_b_tgl = str_replace('Thu', 'Kamis', $aln_b_tgl);
                                    $aln_b_tgl = str_replace('Fri', 'Jumat', $aln_b_tgl);
                                    $aln_b_tgl = str_replace('Sat', 'Sabtu', $aln_b_tgl);
                                    ?>
                                    <td>{{$aln_b_tgl}}</td>
                                    <td>{{\Carbon\Carbon::parse($bongkarmuat->aln_b_tgl)->format('d/m/Y')}}</td>
                                    <td>{{$bongkarmuat->aln_b_lb}}</td>
                                    <td>{{$bongkarmuat->aln_b_pt}}</td>
                                    <td>{{$bongkarmuat->aln_b_hewan}}</td>
                                    <td>{{$bongkarmuat->aln_b_peti}}</td>
                                    <td>{{$bongkarmuat->aln_b_jumlah}}</td>
                                    <td>{{$bongkarmuat->aln_b_barang}}</td>
                                    <td>{{$bongkarmuat->aln_b_volume}}</td>
                                    <?php
                                    $aln_m_tgl = \Carbon\Carbon::parse($bongkarmuat->aln_m_tgl)->format('D');
                                    $aln_m_tgl = str_replace('Sun', 'Minggu', $aln_m_tgl);
                                    $aln_m_tgl = str_replace('Mon', 'Senin', $aln_m_tgl);
                                    $aln_m_tgl = str_replace('Tue', 'Selasa', $aln_m_tgl);
                                    $aln_m_tgl = str_replace('Wed', 'Rabu', $aln_m_tgl);
                                    $aln_m_tgl = str_replace('Thu', 'Kamis', $aln_m_tgl);
                                    $aln_m_tgl = str_replace('Fri', 'Jumat', $aln_m_tgl);
                                    $aln_m_tgl = str_replace('Sat', 'Sabtu', $aln_m_tgl);
                                    ?>
                                    <td>{{$aln_m_tgl}}</td>
                                    <td>{{\Carbon\Carbon::parse($bongkarmuat->aln_m_tgl)->format('d/m/Y')}}</td>
                                    <td>{{$bongkarmuat->aln_m_lm}}</td>
                                    <td>{{$bongkarmuat->aln_m_pn}}</td>
                                    <td>{{$bongkarmuat->aln_m_hewan}}</td>
                                    <td>{{$bongkarmuat->aln_m_peti}}</td>
                                    <td>{{$bongkarmuat->aln_m_jumlah}}</td>
                                    <td>{{$bongkarmuat->aln_m_barang}}</td>
                                    <td>{{$bongkarmuat->aln_m_volume}}</td>
                                    <td>{{$bongkarmuat->ket}}</td>
                                    <td align="center">
                                        <!-- Detail Pelabuhan -->
                                        <a href="#" class="btn btn-sm bg-gradient-primary" data-toggle="modal" data-target="#editBongkarMuat{{$bongkarmuat->id}}"><i class="fas fa-pen-alt"></i></a>
                                        <div class="modal fade" id="editBongkarMuat{{$bongkarmuat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Bongkar Muat</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?= url('/') ?>/tukstersus/editBongkarMuatTuksTersus/{{$bongkarmuat->id}}" method="post">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label>Nama Perusahaan</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="nama_perusahaan" type="text" class="form-control" value="{{$bongkarmuat->nama_perusahaan}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Kapal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="nama_kapal" type="text" class="form-control" value="{{$bongkarmuat->nama_kapal}}" required>
                                                                </div>
                                                            </div>
                                                            <!-- Angkutan Dalam Negeri -->
                                                            <label>Angkutan Dalam Negeri</label>
                                                            <label>Bongkar</label>
                                                            <label>Waktu Bongkar</label>
                                                            <div class="form-group">
                                                                <label>Tanggal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_b_tgl" type="date" class="form-control" value="{{$bongkarmuat->adn_b_tgl}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Lama Bongkar</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_b_lb" type="text" class="form-control" value="{{$bongkarmuat->adn_b_lb}}" required>
                                                                </div>
                                                            </div>
                                                            <label>Dalam Negeri (Antar Pulau)</label>
                                                            <div class="form-group">
                                                                <label>Penumpang Turun (Orang)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_b_pt" type="number" class="form-control" value="{{$bongkarmuat->adn_b_pt}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Hewan (Ekor)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_b_hewan" type="number" class="form-control" value="{{$bongkarmuat->adn_b_hewan}}" required>
                                                                </div>
                                                            </div>
                                                            <label>Jenis Muatan</label>
                                                            <div class="form-group">
                                                                <label>Peti Kemas</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_b_peti" type="number" class="form-control" value="{{$bongkarmuat->adn_b_peti}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jumlah</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_b_jumlah" type="number" class="form-control" value="{{$bongkarmuat->adn_b_jumlah}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Barang</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_b_barang" type="number" class="form-control" value="{{$bongkarmuat->adn_b_barang}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Volume (Ton/M3)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_b_volume" type="number" class="form-control" value="{{$bongkarmuat->adn_b_volume}}" required>
                                                                </div>
                                                            </div>
                                                            <label>Muat</label>
                                                            <label>Waktu Muat</label>
                                                            <div class="form-group">
                                                                <label>Tanggal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_m_tgl" type="date" class="form-control" value="{{$bongkarmuat->adn_m_tgl}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Lama Muat</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_m_lm" type="text" class="form-control" value="{{$bongkarmuat->adn_m_lm}}" required>
                                                                </div>
                                                            </div>
                                                            <label>Dalam Negeri (Antar Pulau)</label>
                                                            <div class="form-group">
                                                                <label>Penumpang Naik (Orang)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_m_pn" type="number" class="form-control" value="{{$bongkarmuat->adn_m_pn}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Hewan (Ekor)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_m_hewan" type="number" class="form-control" value="{{$bongkarmuat->adn_m_hewan}}" required>
                                                                </div>
                                                            </div>
                                                            <label>Jenis Muatan</label>
                                                            <div class="form-group">
                                                                <label>Peti Kemas</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_m_peti" type="number" class="form-control" value="{{$bongkarmuat->adn_m_peti}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jumlah</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_m_jumlah" type="number" class="form-control" value="{{$bongkarmuat->adn_m_jumlah}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Barang</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_m_barang" type="number" class="form-control" value="{{$bongkarmuat->adn_m_barang}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Volume (Ton/M3)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="adn_m_volume" type="number" class="form-control" value="{{$bongkarmuat->adn_m_volume}}" required>
                                                                </div>
                                                            </div>
                                                            <!-- / Angkutan Dalam Negeri -->

                                                            <!-- Angkutan Luar Negeri -->
                                                            <label>Angkutan Luar Negeri</label>
                                                            <label>Bongkar</label>
                                                            <label>Waktu Bongkar</label>
                                                            <div class="form-group">
                                                                <label>Tanggal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_b_tgl" type="date" class="form-control" value="{{$bongkarmuat->aln_b_tgl}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Lama Bongkar</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_b_lb" type="text" class="form-control" value="{{$bongkarmuat->aln_b_lb}}" required>
                                                                </div>
                                                            </div>
                                                            <label>Import</label>
                                                            <div class="form-group">
                                                                <label>Penumpang Turun (Orang)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_b_pt" type="number" class="form-control" value="{{$bongkarmuat->aln_b_pt}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Hewan (Ekor)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_b_hewan" type="number" class="form-control" value="{{$bongkarmuat->aln_b_hewan}}" required>
                                                                </div>
                                                            </div>
                                                            <label>Jenis Muatan</label>
                                                            <div class="form-group">
                                                                <label>Peti Kemas</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_b_peti" type="number" class="form-control" value="{{$bongkarmuat->aln_b_peti}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jumlah</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_b_jumlah" type="number" class="form-control" value="{{$bongkarmuat->aln_b_jumlah}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Barang</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_b_barang" type="number" class="form-control" value="{{$bongkarmuat->aln_b_barang}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Volume (Ton/M3)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_b_volume" type="number" class="form-control" value="{{$bongkarmuat->aln_b_volume}}" required>
                                                                </div>
                                                            </div>
                                                            <label>Muat</label>
                                                            <label>Waktu Muat</label>
                                                            <div class="form-group">
                                                                <label>Tanggal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_m_tgl" type="date" class="form-control" value="{{$bongkarmuat->aln_m_tgl}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Lama Muat</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_m_lm" type="text" class="form-control" value="{{$bongkarmuat->aln_m_lm}}" required>
                                                                </div>
                                                            </div>
                                                            <label>Export</label>
                                                            <div class="form-group">
                                                                <label>Penumpang Naik (Orang)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_m_pn" type="number" class="form-control" value="{{$bongkarmuat->aln_m_pn}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Hewan (Ekor)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_m_hewan" type="number" class="form-control" value="{{$bongkarmuat->aln_m_hewan}}" required>
                                                                </div>
                                                            </div>
                                                            <label>Jenis Muatan</label>
                                                            <div class="form-group">
                                                                <label>Peti Kemas</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_m_peti" type="number" class="form-control" value="{{$bongkarmuat->aln_m_peti}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jumlah</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_m_jumlah" type="number" class="form-control" value="{{$bongkarmuat->aln_m_jumlah}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Barang</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_m_barang" type="number" class="form-control" value="{{$bongkarmuat->aln_m_barang}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Volume (Ton/M3)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="aln_m_volume" type="number" class="form-control" value="{{$bongkarmuat->aln_m_volume}}" required>
                                                                </div>
                                                            </div>
                                                            <!-- / Angkutan Luar Negeri -->

                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="ket" type="text" class="form-control" value="{{$bongkarmuat->ket}}" required>
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
                                        <!-- End Detail Bongkar Muat -->
                                        <!-- Hapus Bongkar Muat -->
                                        <a href="#" class="btn btn-sm bg-gradient-danger" data-toggle="modal" data-target="#hapusBongkarMuat{{$bongkarmuat->id}}"><i class="fas fa-trash"></i></a>
                                        <div class="modal fade" id="hapusBongkarMuat{{$bongkarmuat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Anda yakin ingin menghapus data Bongkar Muat?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn bg-gradient-primary" data-dismiss="modal">Close</button>
                                                            <a href="<?= url('/') ?>/tukstersus/hapusBongkarMuatTuksTersus/{{$bongkarmuat->id}}"><button type="submit" class="btn bg-gradient-danger">Yes</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Hapus Bongkar Muat -->

                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
