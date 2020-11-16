@section('title')
    SIMOPEL-Riau | Detail Penjualan Pas Masuk
@endsection

@extends('main.mainpenyeberangan')

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
                        <h1 class="m-0 text-dark">Detail Penjualan Pas Masuk</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                            <li class="breadcrumb-item active">Penjualan Pas Masuk</li>
                            <li class="breadcrumb-item active">Detail</li>
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
                        <div class="row">
                            <div class="col-sm-10">
                                <h3 class="card-title">Penjualan Pas Masuk</h3>
                            </div>
                            <div class="col-sm-2">
                                <a href="<?= url('/') ?>/penyeberangan/pdfPenjualanPasMasuk/{{$penjualan_list->id}}">
                                    <button type="button" class="btn btn-block bg-gradient-primary"><i class="fas fa-file-pdf"> Cetak</i></button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">

                        <?php
                        $tgl = \Carbon\Carbon::parse($penjualan_list->tanggal)->format('D');
                        $tgl = str_replace('Sun', 'Minggu', $tgl);
                        $tgl = str_replace('Mon', 'Senin', $tgl);
                        $tgl = str_replace('Tue', 'Selasa', $tgl);
                        $tgl = str_replace('Wed', 'Rabu', $tgl);
                        $tgl = str_replace('Thu', 'Kamis', $tgl);
                        $tgl = str_replace('Fri', 'Jumat', $tgl);
                        $tgl = str_replace('Sat', 'Sabtu', $tgl);

                        $bulan = \Carbon\Carbon::parse($penjualan_list->tanggal)->format('M');
                        $bulan = str_replace('Jan', 'Januari', $bulan);
                        $bulan = str_replace('Feb', 'Februari', $bulan);
                        $bulan = str_replace('Mar', 'Maret', $bulan);
                        $bulan = str_replace('Apr', 'April', $bulan);
                        $bulan = str_replace('Mai', 'Mei', $bulan);
                        $bulan = str_replace('Jun', 'Juni', $bulan);
                        $bulan = str_replace('Jul', 'Juli', $bulan);
                        $bulan = str_replace('Aug', 'Agustus', $bulan);
                        $bulan = str_replace('Sep', 'September', $bulan);
                        $bulan = str_replace('Okt', 'Oktober', $bulan);
                        $bulan = str_replace('Nov', 'November', $bulan);
                        $bulan = str_replace('Des', 'Desember', $bulan);
                        ?>
                        <div class="row">
                            <div class="col-sm-2">
                                <p style="font-size: 18px">Hari : {{$tgl}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <p style="font-size: 18px">Tanggal : {{\Carbon\Carbon::parse($penjualan_list->tanggal)->format('d')}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <p style="font-size: 18px">Bulan : {{$bulan}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <p style="font-size: 18px">Tahun : {{\Carbon\Carbon::parse($penjualan_list->tanggal)->format('yy')}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <p style="font-size: 18px">Pelabuhan : {{$user->nama_penyeberangan}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#editWarna"><i class="fas fa-edit"> Warna</i></button>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#editDariNomor"><i class="fas fa-edit"> Dari Nomor</i></button>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#editSDNomor"><i class="fas fa-edit"> S/D Nomor</i></button>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#editJumlah"><i class="fas fa-edit"> Jumlah Lembar</i></button>
                            </div>
                        </div>
                        <br>

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px" rowspan="2">No</th>
                                <th rowspan="2">Jenis Tiket</th>
                                <th rowspan="2">Warna</th>
                                <th colspan="2">Nomor Seri</th>
                                <th rowspan="2">Jumlah Lembar</th>
                                <th rowspan="2">Harga (Rp)</th>
                                <th rowspan="2">Total (Rp)</th>
                            </tr>
                            <tr>
                                <th>Dari Nomor</th>
                                <th>S/D Nomor</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Penumpang/Pengantar</td>
                                <td>{{$penumpang[0]}}</td>
                                <td>{{$penumpang[1]}}</td>
                                <td>{{$penumpang[2]}}</td>
                                <td>{{$penumpang[3]}}</td>
                                <td>Rp 2.000</td>
                                @if(count($penumpang) != 0)
                                <td>Rp {{$penumpang[3] * 2000}}</td>
                                @else
                                <td></td>
                                @endif
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Golongan I</td>
                                <td>{{$gol1[0]}}</td>
                                <td>{{$gol1[1]}}</td>
                                <td>{{$gol1[2]}}</td>
                                <td>{{$gol1[3]}}</td>
                                <td>Rp 2.500</td>
                                @if(count($gol1) != 0)
                                    <td>Rp {{$gol1[3] * 2500}}</td>
                                @else
                                    <td></td>
                                @endif
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Golongan II</td>
                                <td>{{$gol2[0]}}</td>
                                <td>{{$gol2[1]}}</td>
                                <td>{{$gol2[2]}}</td>
                                <td>{{$gol2[3]}}</td>
                                <td>Rp 3.500</td>
                                @if(count($gol2) != 0)
                                    <td>Rp {{$gol2[3] * 3500}}</td>
                                @else
                                    <td></td>
                                @endif
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Golongan III</td>
                                <td>{{$gol3[0]}}</td>
                                <td>{{$gol3[1]}}</td>
                                <td>{{$gol3[2]}}</td>
                                <td>{{$gol3[3]}}</td>
                                <td>Rp 4.500</td>
                                @if(count($gol3) != 0)
                                    <td>Rp {{$gol3[3] * 4500}}</td>
                                @else
                                    <td></td>
                                @endif
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Golongan IV</td>
                                <td>{{$gol4[0]}}</td>
                                <td>{{$gol4[1]}}</td>
                                <td>{{$gol4[2]}}</td>
                                <td>{{$gol4[3]}}</td>
                                <td>Rp 5.000</td>
                                @if(count($gol4) != 0)
                                    <td>Rp {{$gol4[3] * 5000}}</td>
                                @else
                                    <td></td>
                                @endif
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Golongan V</td>
                                <td>{{$gol5[0]}}</td>
                                <td>{{$gol5[1]}}</td>
                                <td>{{$gol5[2]}}</td>
                                <td>{{$gol5[3]}}</td>
                                <td>Rp 5.500</td>
                                @if(count($gol5) != 0)
                                    <td>Rp {{$gol5[3] * 5000}}</td>
                                @else
                                    <td></td>
                                @endif
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Golongan VI</td>
                                <td>{{$gol6[0]}}</td>
                                <td>{{$gol6[1]}}</td>
                                <td>{{$gol6[2]}}</td>
                                <td>{{$gol6[3]}}</td>
                                <td>Rp 10.000</td>
                                @if(count($gol6) != 0)
                                    <td>Rp {{$gol6[3] * 10000}}</td>
                                @else
                                    <td></td>
                                @endif
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Golongan VII</td>
                                <td>{{$gol7[0]}}</td>
                                <td>{{$gol7[1]}}</td>
                                <td>{{$gol7[2]}}</td>
                                <td>{{$gol7[3]}}</td>
                                <td>Rp 45.500</td>
                                @if(count($gol7) != 0)
                                    <td>Rp {{$gol7[3] * 45500}}</td>
                                @else
                                    <td></td>
                                @endif
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Golongan VIII</td>
                                <td>{{$gol8[0]}}</td>
                                <td>{{$gol8[1]}}</td>
                                <td>{{$gol8[2]}}</td>
                                <td>{{$gol8[3]}}</td>
                                <td>Rp 75.000</td>
                                @if(count($gol8) != 0)
                                    <td>Rp {{$gol8[3] * 75000}}</td>
                                @else
                                    <td></td>
                                @endif
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- Modal Edit Warna -->
    <div class="modal fade" id="editWarna" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Warna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= url('/') ?>/penyeberangan/editPenjualanPasMasuk/{{$penjualan_list->id}}/0" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Penumpang/Pengantar</label>
                            <div class="input-group mb-3">
                                <input name="penumpang" type="text" class="form-control" value="{{$penumpang[0]}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan I</label>
                            <div class="input-group mb-3">
                                <input name="gol1" type="text" class="form-control" value="{{$gol1[0]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan II</label>
                            <div class="input-group mb-3">
                                <input name="gol2" type="text" class="form-control" value="{{$gol2[0]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan III</label>
                            <div class="input-group mb-3">
                                <input name="gol3" type="text" class="form-control" value="{{$gol3[0]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan IV</label>
                            <div class="input-group mb-3">
                                <input name="gol4" type="text" class="form-control" value="{{$gol4[0]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan V</label>
                            <div class="input-group mb-3">
                                <input name="gol5" type="text" class="form-control" value="{{$gol5[0]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VI</label>
                            <div class="input-group mb-3">
                                <input name="gol6" type="text" class="form-control" value="{{$gol6[0]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VII</label>
                            <div class="input-group mb-3">
                                <input name="gol7" type="text" class="form-control" value="{{$gol7[0]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VIII</label>
                            <div class="input-group mb-3">
                                <input name="gol8" type="text" class="form-control" value="{{$gol8[0]}}" >
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
    <!-- // Modal Edit Warna -->

    <!-- Modal Edit Dari Nomor -->
    <div class="modal fade" id="editDariNomor" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Dari Nomor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= url('/') ?>/penyeberangan/editPenjualanPasMasuk/{{$penjualan_list->id}}/1" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Penumpang/Pengantar</label>
                            <div class="input-group mb-3">
                                <input name="penumpang" type="text" class="form-control" value="{{$penumpang[1]}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan I</label>
                            <div class="input-group mb-3">
                                <input name="gol1" type="text" class="form-control" value="{{$gol1[1]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan II</label>
                            <div class="input-group mb-3">
                                <input name="gol2" type="text" class="form-control" value="{{$gol2[1]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan III</label>
                            <div class="input-group mb-3">
                                <input name="gol3" type="text" class="form-control" value="{{$gol3[1]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan IV</label>
                            <div class="input-group mb-3">
                                <input name="gol4" type="text" class="form-control" value="{{$gol4[1]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan V</label>
                            <div class="input-group mb-3">
                                <input name="gol5" type="text" class="form-control" value="{{$gol5[1]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VI</label>
                            <div class="input-group mb-3">
                                <input name="gol6" type="text" class="form-control" value="{{$gol6[1]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VII</label>
                            <div class="input-group mb-3">
                                <input name="gol7" type="text" class="form-control" value="{{$gol7[1]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VIII</label>
                            <div class="input-group mb-3">
                                <input name="gol8" type="text" class="form-control" value="{{$gol8[1]}}" >
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
    <!-- // Modal Edit Dari Nomor -->

    <!-- Modal Edit S/D Nomor -->
    <div class="modal fade" id="editSDNomor" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit S/D Nomor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= url('/') ?>/penyeberangan/editPenjualanPasMasuk/{{$penjualan_list->id}}/2" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Penumpang/Pengantar</label>
                            <div class="input-group mb-3">
                                <input name="penumpang" type="text" class="form-control" value="{{$penumpang[2]}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan I</label>
                            <div class="input-group mb-3">
                                <input name="gol1" type="text" class="form-control" value="{{$gol1[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan II</label>
                            <div class="input-group mb-3">
                                <input name="gol2" type="text" class="form-control" value="{{$gol2[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan III</label>
                            <div class="input-group mb-3">
                                <input name="gol3" type="text" class="form-control" value="{{$gol3[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan IV</label>
                            <div class="input-group mb-3">
                                <input name="gol4" type="text" class="form-control" value="{{$gol4[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan V</label>
                            <div class="input-group mb-3">
                                <input name="gol5" type="text" class="form-control" value="{{$gol5[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VI</label>
                            <div class="input-group mb-3">
                                <input name="gol6" type="text" class="form-control" value="{{$gol6[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VII</label>
                            <div class="input-group mb-3">
                                <input name="gol7" type="text" class="form-control" value="{{$gol7[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VIII</label>
                            <div class="input-group mb-3">
                                <input name="gol8" type="text" class="form-control" value="{{$gol8[2]}}" >
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
    <!-- // Modal Edit S/D Nomor -->

    <!-- Modal Edit Jumlah Lembar -->
    <div class="modal fade" id="editJumlah" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Jumlah Lembar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= url('/') ?>/penyeberangan/editPenjualanPasMasuk/{{$penjualan_list->id}}/3" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Penumpang/Pengantar</label>
                            <div class="input-group mb-3">
                                <input name="penumpang" type="number" class="form-control" value="{{$penumpang[3]}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan I</label>
                            <div class="input-group mb-3">
                                <input name="gol1" type="number" class="form-control" value="{{$gol1[3]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan II</label>
                            <div class="input-group mb-3">
                                <input name="gol2" type="number" class="form-control" value="{{$gol2[3]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan III</label>
                            <div class="input-group mb-3">
                                <input name="gol3" type="number" class="form-control" value="{{$gol3[3]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan IV</label>
                            <div class="input-group mb-3">
                                <input name="gol4" type="number" class="form-control" value="{{$gol4[3]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan V</label>
                            <div class="input-group mb-3">
                                <input name="gol5" type="number" class="form-control" value="{{$gol5[3]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VI</label>
                            <div class="input-group mb-3">
                                <input name="gol6" type="number" class="form-control" value="{{$gol6[3]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VII</label>
                            <div class="input-group mb-3">
                                <input name="gol7" type="number" class="form-control" value="{{$gol7[3]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VIII</label>
                            <div class="input-group mb-3">
                                <input name="gol8" type="number" class="form-control" value="{{$gol8[3]}}" >
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
    <!-- // Modal Edit Jumlah Lembar -->
@endsection
