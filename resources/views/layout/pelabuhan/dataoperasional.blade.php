@section('title')
    SIMOPEL-Riau | Data Operasinal
@endsection

@extends('main.mainpelabuhan')

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
                        <h1 class="m-0 text-dark">Data Operasional</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                            <li class="breadcrumb-item active">Data Operasional</li>
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
                        <h3 class="card-title">Data Operasional</h3>
                    </div>
                    <!-- /.Button -->
                    <div class="row" style="margin-top: 10px; margin-right: 10px; margin-left: 10px">
                        <div class="col-sm-2">
                            <!-- Tombol Tambah -->
                                <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#tambahData"><i class="fas fa-plus"> Tambah Data</i></button>
                                <!-- Modal -->
                                <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Operasional</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= url('/') ?>/pelabuhan/tambahOperasionalPelabuhan" method="post">
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
                                                    <div class="form-group">
                                                        <label>Type Kapal</label>
                                                        <div class="input-group mb-3">
                                                            <input name="type_kapal" type="text" class="form-control" placeholder="Type Kapal" required>
                                                        </div>
                                                    </div>
                                                    <label>Data Kapal</label>
                                                    <div class="form-group">
                                                        <label>GT</label>
                                                        <div class="input-group mb-3">
                                                            <input name="gt" type="number" class="form-control" placeholder="gt" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Panjang</label>
                                                        <div class="input-group mb-3">
                                                            <input name="panjang" type="number" class="form-control" placeholder="Panjang" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Lebar</label>
                                                        <div class="input-group mb-3">
                                                            <input name="lebar" type="number" class="form-control" placeholder="Lebar" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Draft</label>
                                                        <div class="input-group mb-3">
                                                            <input name="draft" type="text" class="form-control" placeholder="Draft" required>
                                                        </div>
                                                    </div>
                                                    <label>Kedatangan</label>
                                                    <div class="form-group">
                                                        <label>Pelabuhan Asal</label>
                                                        <div class="input-group mb-3">
                                                            <input name="kd_pel_asal" type="text" class="form-control" placeholder="Pelabuhan Asal" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jarak</label>
                                                        <div class="input-group mb-3">
                                                            <input name="kd_jarak" type="number" class="form-control" placeholder="Jarak" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Waktu Berlayar</label>
                                                        <div class="input-group mb-3">
                                                            <input name="kd_wkt_berlayar" type="text" class="form-control" placeholder="Waktu Berlayar" required>
                                                        </div>
                                                    </div>
                                                    <label>Tiba</label>
                                                    <div class="form-group">
                                                        <label>Tanggal</label>
                                                        <div class="input-group mb-3">
                                                            <input name="kd_tb_tgl" type="date" class="form-control" placeholder="Tanggal" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jam</label>
                                                        <div class="input-group mb-3">
                                                            <input name="kd_tb_jam" type="time" class="form-control" placeholder="Jam" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tambat/Sadar (Jam)</label>
                                                        <div class="input-group mb-3">
                                                            <input name="kd_tambat" type="time" class="form-control" placeholder="Tambat" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jam Labuh (Jam)</label>
                                                        <div class="input-group mb-3">
                                                            <input name="kd_jam_labuh" type="time" class="form-control" placeholder="Jam Labuh" required>
                                                        </div>
                                                    </div>
                                                    <label>Keberangkatan</label>
                                                    <div class="form-group">
                                                        <label>Pelabuhan Tujuan</label>
                                                        <div class="input-group mb-3">
                                                            <input name="kb_pel_tujuan" type="text" class="form-control" placeholder="Pelabuhan Tujuan" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jarak Mil</label>
                                                        <div class="input-group mb-3">
                                                            <input name="kb_jarak" type="number" class="form-control" placeholder="Jarak Mil" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal</label>
                                                        <div class="input-group mb-3">
                                                            <input name="kb_tgl" type="date" class="form-control" placeholder="Tanggal" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jam</label>
                                                        <div class="input-group mb-3">
                                                            <input name="kb_jam" type="time" class="form-control" placeholder="Jam" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nomor Surat Persetujuan</label>
                                                        <div class="input-group mb-3">
                                                            <input name="nomor_sp" type="text" class="form-control" placeholder="Nomor" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal Surat Persetujuan</label>
                                                        <div class="input-group mb-3">
                                                            <input name="tgl_sp" type="date" class="form-control" placeholder="Tanggal" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Konsumsi Bahan Bakar</label>
                                                        <div class="input-group mb-3">
                                                            <input name="kon_bahan_bakar" type="text" class="form-control" placeholder="Konsumsi Bahan Bakar" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Bahan Bakar</label>
                                                        <div class="input-group mb-3">
                                                            <input name="jen_bahan_bakar" type="text" class="form-control" placeholder="Jenis Bahan Bakar" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Keterangan</label>
                                                        <div class="input-group mb-3">
                                                            <input name="ket" type="text" class="form-control" placeholder="Keterangan">
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
                            <!-- / Tombol Tambah -->
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
                                                <form action="<?= url('/') ?>/pelabuhan/cetakPDFBulananOperasional" method="post" >
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
                                                <form action="<?= url('/') ?>/pelabuhan/cetakPDFTahunanOperasional" method="post" >
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
                                    <th style="width: 10px" rowspan="3">No</th>
                                    <th rowspan="3">Nama Perusahaan</th>
                                    <th rowspan="3">Nama Kapal</th>
                                    <th rowspan="3">Type kapal</th>
                                    <th colspan="4" rowspan="2">Data kapal</th>
                                    <th colspan="7">Kedatangan</th>
                                    <th colspan="6">Keberangkatan</th>
                                    <th rowspan="3">Konsumsi Bahan Bakar</th>
                                    <th rowspan="3">Jenis Bahan Bakar</th>
                                    <th rowspan="3">Keterangan</th>
                                    <th rowspan="3">Aksi</th>
                                </tr>
                                <tr>
                                    <th rowspan="2">Pelabuhan Asal</th>
                                    <th rowspan="2">Jarak Mil</th>
                                    <th rowspan="2">Waktu Berlayar</th>
                                    <th colspan="2">Tiba</th>
                                    <th rowspan="2">Tambat(Jam)</th>
                                    <th rowspan="2">Labuh(Jam)</th>
                                    <th rowspan="2">Pelabuhan Tujuan</th>
                                    <th rowspan="2">Jarak Mil</th>
                                    <th rowspan="2">Hari/Tanggal</th>
                                    <th rowspan="2">Jam</th>
                                    <th colspan="2">Surat Persetujuan</th>
                                </tr>
                                <tr>
                                    <th>GT</th>
                                    <th>Panjang</th>
                                    <th>Lebar</th>
                                    <th>Draft</th>
                                    <th>Hari/Tanggal</th>
                                    <th>Jam</th>
                                    <th>Nomor</th>
                                    <th>Tanggal</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 0;
                                foreach ($operasional_list as $operasional):
                                $no++;
                                ?>
                                <tr>
                                    <td style="width: 10px">{{ $no }}</td>
                                    <td>{{$operasional->nama_perusahaan}}</td>
                                    <td>{{$operasional->nama_kapal}}</td>
                                    <td>{{$operasional->type_kapal}}</td>
                                    <td>{{$operasional->gt}}</td>
                                    <td>{{$operasional->panjang}}</td>
                                    <td>{{$operasional->lebar}}</td>
                                    <td>{{$operasional->draft}}</td>
                                    <td>{{$operasional->kd_pel_asal}}</td>
                                    <td>{{$operasional->kd_jarak}}</td>
                                    <td>{{$operasional->kd_wkt_berlayar}}</td>
                                    <?php
                                    $kd_tb_tgl = \Carbon\Carbon::parse($operasional->kd_tb_tgl)->format('D');
                                    $kd_tb_tgl = str_replace('Sun', 'Minggu', $kd_tb_tgl);
                                    $kd_tb_tgl = str_replace('Mon', 'Senin', $kd_tb_tgl);
                                    $kd_tb_tgl = str_replace('Tue', 'Selasa', $kd_tb_tgl);
                                    $kd_tb_tgl = str_replace('Wed', 'Rabu', $kd_tb_tgl);
                                    $kd_tb_tgl = str_replace('Thu', 'Kamis', $kd_tb_tgl);
                                    $kd_tb_tgl = str_replace('Fri', 'Jumat', $kd_tb_tgl);
                                    $kd_tb_tgl = str_replace('Sat', 'Sabtu', $kd_tb_tgl);
                                    ?>
                                    <td>{{$kd_tb_tgl}}/ {{\Carbon\Carbon::parse($operasional->kd_tb_tgl)->format('d/m/Y')}}</td>
                                    <td>{{$operasional->kd_tb_jam}}</td>
                                    <td>{{$operasional->kd_tambat}}</td>
                                    <td>{{$operasional->kd_jam_labuh}}</td>
                                    <td>{{$operasional->kb_pel_tujuan}}</td>
                                    <td>{{$operasional->kb_jarak}}</td>
                                    <?php
                                    $kb_tgl = \Carbon\Carbon::parse($operasional->kb_tgl)->format('D');
                                    $kb_tgl = str_replace('Sun', 'Minggu', $kb_tgl);
                                    $kb_tgl = str_replace('Mon', 'Senin', $kb_tgl);
                                    $kb_tgl = str_replace('Tue', 'Selasa', $kb_tgl);
                                    $kb_tgl = str_replace('Wed', 'Rabu', $kb_tgl);
                                    $kb_tgl = str_replace('Thu', 'Kamis', $kb_tgl);
                                    $kb_tgl = str_replace('Fri', 'Jumat', $kb_tgl);
                                    $kb_tgl = str_replace('Sat', 'Sabtu', $kb_tgl);
                                    ?>
                                    <td>{{$kb_tgl}}/ {{\Carbon\Carbon::parse($operasional->kb_tgl)->format('d/m/Y')}}</td>
                                    <td>{{$operasional->kb_jam}}</td>
                                    <td>{{$operasional->nomor_sp}}</td>
                                    <td>{{\Carbon\Carbon::parse($operasional->tgl_sp)->format('d/m/Y')}}</td>
                                    <td>{{$operasional->kon_bahan_bakar}}</td>
                                    <td>{{$operasional->jen_bahan_bakar}}</td>
                                    <td>{{$operasional->ket}}</td>
                                    <td align="center">
                                        <!-- Detail Operasional -->
                                        <a href="#" class="btn btn-sm bg-gradient-primary" data-toggle="modal" data-target="#editOperasional{{$operasional->id}}"><i class="fas fa-pen-alt"></i></a>
                                        <div class="modal fade" id="editOperasional{{$operasional->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Operasional</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?= url('/') ?>/pelabuhan/editOperasionalPelabuhan/{{$operasional->id}}" method="post">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label>Nama Perusahaan</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="nama_perusahaan" type="text" class="form-control" value="{{$operasional->nama_perusahaan}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Kapal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="nama_kapal" type="text" class="form-control" value="{{$operasional->nama_kapal}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Type Kapal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="type_kapal" type="text" class="form-control" value="{{$operasional->type_kapal}}" required>
                                                                </div>
                                                            </div>
                                                            <label>Data Kapal</label>
                                                            <div class="form-group">
                                                                <label>GT</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="gt" type="number" class="form-control" value="{{$operasional->gt}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Panjang</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="panjang" type="number" class="form-control" value="{{$operasional->panjang}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Lebar</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="lebar" type="number" class="form-control" value="{{$operasional->lebar}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Draft</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="draft" type="text" class="form-control" value="{{$operasional->draft}}" required>
                                                                </div>
                                                            </div>
                                                            <label>Kedatangan</label>
                                                            <div class="form-group">
                                                                <label>Pelabuhan Asal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="kd_pel_asal" type="text" class="form-control" value="{{$operasional->kd_pel_asal}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jarak</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="kd_jarak" type="number" class="form-control" value="{{$operasional->kd_jarak}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Waktu Berlayar</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="kd_wkt_berlayar" type="text" class="form-control" value="{{$operasional->kd_wkt_berlayar}}" required>
                                                                </div>
                                                            </div>
                                                            <label>Tiba</label>
                                                            <div class="form-group">
                                                                <label>Tanggal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="kd_tb_tgl" type="date" class="form-control" value="{{$operasional->kd_tb_tgl}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jam</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="kd_tb_jam" type="time" class="form-control" value="{{$operasional->kd_tb_jam}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tambat</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="kd_tambat" type="time" class="form-control" value="{{$operasional->kd_tambat}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jam Labuh</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="kd_jam_labuh" type="time" class="form-control" value="{{$operasional->kd_jam_labuh}}" required>
                                                                </div>
                                                            </div>
                                                            <label>Keberangkatan</label>
                                                            <div class="form-group">
                                                                <label>Pelabuhan Tujuan</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="kb_pel_tujuan" type="text" class="form-control" value="{{$operasional->kb_pel_tujuan}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jarak Mil</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="kb_jarak" type="number" class="form-control" value="{{$operasional->kb_jarak}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tanggal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="kb_tgl" type="date" class="form-control" value="{{$operasional->kb_tgl}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jam</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="kb_jam" type="time" class="form-control" value="{{$operasional->kb_jam}}" required>
                                                                </div>
                                                            </div>
                                                            <label>Surat Persetujuan</label>
                                                            <div class="form-group">
                                                                <label>Nomor</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="nomor_sp" type="text" class="form-control" value="{{$operasional->nomor_sp}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tanggal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="tgl_sp" type="date" class="form-control" value="{{$operasional->tgl_sp}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Konsumsi Bahan Bakar</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="kon_bahan_bakar" type="text" class="form-control" value="{{$operasional->kon_bahan_bakar}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jenis Bahan Bakar</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="jen_bahan_bakar" type="text" class="form-control" value="{{$operasional->jen_bahan_bakar}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="ket" type="text" class="form-control" value="{{$operasional->ket}}">
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
                                        <!-- End Detail Operasional -->
                                        <!-- Hapus Operasional -->
                                        <a href="#" class="btn btn-sm bg-gradient-danger" data-toggle="modal" data-target="#hapusOperasional{{$operasional->id}}"><i class="fas fa-trash"></i></a>
                                        <div class="modal fade" id="hapusOperasional{{$operasional->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Anda yakin ingin menghapus data operasional?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn bg-gradient-primary" data-dismiss="modal">Close</button>
                                                            <a href="<?= url('/') ?>/pelabuhan/hapusOperasionalPelabuhan/{{$operasional->id}}"><button type="submit" class="btn bg-gradient-danger">Yes</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Hapus Operasional -->

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
