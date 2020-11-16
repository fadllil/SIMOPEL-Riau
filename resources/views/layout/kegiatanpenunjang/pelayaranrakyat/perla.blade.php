@section('title')
    SIMOPEL-Riau | Perjalan Kapal
@endsection

@extends('main.kegiatanpenunjang.mainpelayaranrakyat')

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
                        <h1 class="m-0 text-dark">Perjalanan Kapal</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                            <li class="breadcrumb-item active">Perla</li>
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
                        <h3 class="card-title">Perjalan Kapal</h3>
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
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Operasional</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= url('/') ?>/kegiatanpenunjang/tambahPerla" method="post">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Nama Kapal</label>
                                                    <div class="input-group mb-3">
                                                        <input name="nama_kapal" type="text" class="form-control" placeholder="Nama Kapal" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Berdera/Status Kapal</label>
                                                    <div class="input-group mb-3">
                                                        <input name="bendera" type="text" class="form-control" placeholder="Bendera/Status Kapal" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Type/Ukuran Kapal</label>
                                                    <div class="input-group mb-3">
                                                        <input name="type" type="text" class="form-control" placeholder="Type/Ukuran Kapal" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kecepatan Ekonomis</label>
                                                    <div class="input-group mb-3">
                                                        <input name="kec_ekonomis" type="text" class="form-control" placeholder="Kecepatan Ekonomis" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status Trayek</label>
                                                    <div class="input-group mb-3">
                                                        <select class="form-control select2" style="width: 100%;" name="status_trayek" required>
                                                            <option selected="selected">-- Pilih Status Trayek --</option>
                                                            <option value="Liner">Liner</option>
                                                            <option value="Tramper">Tramper</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Pelabuhan Asal</label>
                                                    <div class="input-group mb-3">
                                                        <input name="pelabuhan_asal" type="text" class="form-control" placeholder="Pelabuhan Asal" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tiba (Tanggal)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="tb_tgl" type="date" class="form-control" placeholder="Tiba (Tanggal)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tiba (Jam)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="tb_jam" type="time" class="form-control" placeholder="Tiba (Jam)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Berangkat (Tanggal)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="bk_tgl" type="date" class="form-control" placeholder="Berangkat (Tanggal)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Berangkat (Jam)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="bk_jam" type="time" class="form-control" placeholder="Berangkat (Jam)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jarak Mil</label>
                                                    <div class="input-group mb-3">
                                                        <input name="jarak" type="number" class="form-control" placeholder="Jarak Mil" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Berlayar (Hari)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="berlayar_hari" type="text" class="form-control" placeholder="Berlayar (Hari)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Berlayar (Jam)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="berlayar_jam" type="time" class="form-control" placeholder="Berlayar (Jam)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Berlabuh (Hari)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="berlabuh_hari" type="text" class="form-control" placeholder="Berlabuh (Hari)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Berlabuh (Jam)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="berlabuh_jam" type="time" class="form-control" placeholder="Berlabuh (Jam)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Bongkar Muat (Mulai)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="bm_mulai" type="time" class="form-control" placeholder="Bongkar Muat (Mulai)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Bongkar Muat (Selesai)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="bm_selesai" type="time" class="form-control" placeholder="Bongkar Muat (Selesai)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Perlabuhan Tujuan</label>
                                                    <div class="input-group mb-3">
                                                        <input name="pelabuhan_tujuan" type="text" class="form-control" placeholder="Perlabuhan Tujuan" required="">
                                                    </div>
                                                </div>

                                                <label>Pemuatan/Pemberangkatan</label>
                                                <div class="form-group">
                                                    <label>B/M</label>
                                                    <div class="input-group mb-3">
                                                        <input name="b_m" type="text" class="form-control" placeholder="B/M" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ton 1000 kg</label>
                                                    <div class="input-group mb-3">
                                                        <input name="berat" type="number" class="form-control" placeholder="Ton 1000 kg" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ukuran (M3)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="ukuran" type="number" class="form-control" placeholder="Ukuran (M3)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Penumpang</label>
                                                    <div class="input-group mb-3">
                                                        <input name="penumpang" type="number" class="form-control" placeholder="Penumpang" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Hewan</label>
                                                    <div class="input-group mb-3">
                                                        <input name="hewan" type="number" class="form-control" placeholder="Hewan" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Barang</label>
                                                    <div class="input-group mb-3">
                                                        <input name="jenis_barang" type="text" class="form-control" placeholder="Jenis Barang" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kemasan</label>
                                                    <div class="input-group mb-3">
                                                        <input name="kemasan" type="text" class="form-control" placeholder="Kemasan" required="">
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
                                            <form action="<?= url('/') ?>/kegiatanpenunjang/cetakPDFBulananPerla" method="post" >
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
                                            <form action="<?= url('/') ?>/kegiatanpenunjang/cetakPDFTahunanPerla" method="post" >
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
                                    <th style="width: 10px" rowspan="2">No</th>
                                    <th rowspan="2">Nama Kapal</th>
                                    <th rowspan="2">Bendera/Status Kapal</th>
                                    <th rowspan="2">Type/Ukuran Kapal</th>
                                    <th rowspan="2">Kecepatan Ekonomis</th>
                                    <th rowspan="2">Status Trayek</th>
                                    <th rowspan="2">Pelabuhan Asal</th>
                                    <th colspan="2">Tiba</th>
                                    <th colspan="2">Berangkat</th>
                                    <th rowspan="2">Jarak Mil</th>
                                    <th colspan="2">Waktu Berlayar</th>
                                    <th colspan="2">Waktu Berlabuh</th>
                                    <th colspan="2">Bongkar Muat</th>
                                    <th rowspan="2">Waktu Yang Diperlukan</th>
                                    <th rowspan="2">Pelabuhan Tujuan</th>
                                    <th colspan="7">Pemuatan/Pemberangkatan</th>
                                    <th rowspan="2">Aksi</th>
                                </tr>
                                <tr>
                                    <th>Tgl</th>
                                    <th>Jam</th>
                                    <th>Tgl</th>
                                    <th>Jam</th>
                                    <th>Heri</th>
                                    <th>Jam</th>
                                    <th>Hari</th>
                                    <th>Jam</th>
                                    <th>Mulai</th>
                                    <th>Selesai</th>
                                    <th>B/M</th>
                                    <th>Ton 1000 Kg</th>
                                    <th>Ukuran (M3)</th>
                                    <th>Penumpang</th>
                                    <th>Hewan</th>
                                    <th>Jenis Barang</th>
                                    <th>Kemasan</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 0;
                                foreach ($perla_list as $perla):
                                $no++;
                                ?>
                                <tr>
                                    <td style="width: 10px">{{ $no }}</td>
                                    <td>{{$perla->nama_kapal}}</td>
                                    <td>{{$perla->bendera}}</td>
                                    <td>{{$perla->type}}</td>
                                    <td>{{$perla->kec_ekonomis}}</td>
                                    <td>{{$perla->status_trayek}}</td>
                                    <td>{{$perla->pelabuhan_asal}}</td>
                                    <td>{{\Carbon\Carbon::parse($perla->tb_tgl)->format('d/m/Y')}}</td>
                                    <td>{{\Carbon\Carbon::parse($perla->tb_jam)->format('H:i')}}</td>
                                    <td>{{\Carbon\Carbon::parse($perla->bk_tgl)->format('d/m/Y')}}</td>
                                    <td>{{\Carbon\Carbon::parse($perla->bk_jam)->format('H:i')}}</td>
                                    <td>{{$perla->jarak}}</td>
                                    <td>{{$perla->berlayar_hari}}</td>
                                    <td>{{\Carbon\Carbon::parse($perla->berlayar_jam)->format('H:i')}}</td>
                                    <td>{{$perla->berlabuh_hari}}</td>
                                    <td>{{\Carbon\Carbon::parse($perla->berlabuh_jam)->format('H:i')}}</td>
                                    <td>{{\Carbon\Carbon::parse($perla->bm_mulai)->format('H:i')}}</td>
                                    <td>{{\Carbon\Carbon::parse($perla->bm_selesai)->format('H:i')}}</td>
                                    <?php
                                    if($perla->bm_mulai != '' && $perla->bm_selesai != '' ){
                                        $awal = $perla->bm_mulai;
                                        $selesai = $perla->bm_selesai;
                                        $to = \Carbon\Carbon::createFromFormat('H:i:s', $awal);
                                        $from = \Carbon\Carbon::createFromFormat('H:i:s', $selesai);
                                        $diff_in_hours = $to->diffInMinutes($from);
                                        ?>
                                        <td>{{$diff_in_hours}} Menit</td>
                                    <?php
                                    }else{
                                        ?>
                                        <td></td>
                                    <?php
                                    }
                                    ?>
                                    <td>{{$perla->pelabuhan_tujuan}}</td>
                                    <td>{{$perla->b_m}}</td>
                                    <td>{{$perla->berat}}</td>
                                    <td>{{$perla->ukuran}}</td>
                                    <td>{{$perla->penumpang}}</td>
                                    <td>{{$perla->hewan}}</td>
                                    <td>{{$perla->jenis_barang}}</td>
                                    <td>{{$perla->kemasan}}</td>
                                    <td align="center">
                                        <!-- Edit Perla -->
                                        <a href="#" class="btn btn-sm bg-gradient-primary" data-toggle="modal" data-target="#editPerla{{$perla->id}}"><i class="fas fa-pen-alt"></i></a>
                                        <div class="modal fade" id="editPerla{{$perla->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Perjalanan Kapal</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?= url('/') ?>/kegiatanpenunjang/editPerla/{{$perla->id}}" method="post">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label>Nama Kapal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="nama_kapal" type="text" class="form-control" value="{{$perla->nama_kapal}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Berdera/Status Kapal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="bendera" type="text" class="form-control" value="{{$perla->bendera}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Type/Ukuran Kapal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="type" type="text" class="form-control" value="{{$perla->type}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kecepatan Ekonomis</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="kec_ekonomis" type="text" class="form-control" value="{{$perla->kec_ekonomis}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Status Trayek</label>
                                                                <div class="input-group mb-3">
                                                                    <select class="form-control select2" style="width: 100%;" name="status_trayek" required>
                                                                        <option>-- Pilih Status Trayek --</option>
                                                                        @if($perla->status_trayek == 'Liner')
                                                                        <option selected="selected" value="Liner">Liner</option>
                                                                        <option value="Tramper">Tramper</option>
                                                                        @else
                                                                            <option value="Liner">Liner</option>
                                                                            <option selected="selected" value="Tramper">Tramper</option>
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Pelabuhan Asal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="pelabuhan_asal" type="text" class="form-control" value="{{$perla->pelabuhan_asal}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tiba (Tanggal)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="tb_tgl" type="date" class="form-control" value="{{$perla->tb_tgl}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tiba (Jam)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="tb_jam" type="time" class="form-control" value="{{$perla->tb_jam}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Berangkat (Tanggal)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="bk_tgl" type="date" class="form-control" value="{{$perla->bk_tgl}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Berangkat (Jam)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="bk_jam" type="time" class="form-control" value="{{$perla->bk_jam}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jarak Mil</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="jarak" type="number" class="form-control" value="{{$perla->jarak}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Berlayar (Hari)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="berlayar_hari" type="text" class="form-control" value="{{$perla->berlayar_hari}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Berlayar (Jam)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="berlayar_jam" type="time" class="form-control" value="{{$perla->berlayar_jam}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Berlabuh (Hari)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="berlabuh_hari" type="text" class="form-control" value="{{$perla->berlabuh_hari}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Berlabuh (Jam)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="berlabuh_jam" type="time" class="form-control" value="{{$perla->berlabuh_jam}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Bongkar Muat (Mulai)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="bm_mulai" type="time" class="form-control" value="{{$perla->bm_mulai}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Bongkar Muat (Selesai)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="bm_selesai" type="time" class="form-control" value="{{$perla->bm_selesai}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Perlabuhan Tujuan</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="pelabuhan_tujuan" type="text" class="form-control" value="{{$perla->pelabuhan_tujuan}}" required="">
                                                                </div>
                                                            </div>

                                                            <label>Pemuatan/Pemberangkatan</label>
                                                            <div class="form-group">
                                                                <label>B/M</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="b_m" type="text" class="form-control" value="{{$perla->b_m}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Ton 1000 kg</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="berat" type="number" class="form-control" value="{{$perla->berat}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Ukuran (M3)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="ukuran" type="number" class="form-control" value="{{$perla->ukuran}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Penumpang</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="penumpang" type="number" class="form-control" value="{{$perla->penumpang}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Hewan</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="hewan" type="number" class="form-control" value="{{$perla->hewan}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jenis Barang</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="jenis_barang" type="text" class="form-control" value="{{$perla->jenis_barang}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kemasan</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="kemasan" type="text" class="form-control" value="{{$perla->kemasan}}" required="">
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
                                        <!-- End Edit Perla -->
                                        <!-- Hapus Perla -->
                                        <a href="#" class="btn btn-sm bg-gradient-danger" data-toggle="modal" data-target="#hapusPerla{{$perla->id}}"><i class="fas fa-trash"></i></a>
                                        <div class="modal fade" id="hapusPerla{{$perla->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Anda yakin ingin menghapus data Perjalanan Kapal?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn bg-gradient-primary" data-dismiss="modal">Close</button>
                                                            <a href="<?= url('/') ?>/kegiatanpenunjang/hapusPerla/{{$perla->id}}"><button type="submit" class="btn bg-gradient-danger">Yes</button></a>
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
