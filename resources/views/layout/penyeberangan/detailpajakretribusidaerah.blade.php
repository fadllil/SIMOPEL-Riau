@section('title')
    SIMOPEL-Riau | Detail Pajak & Retibusi Daerah
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
                        <h1 class="m-0 text-dark">Detail Pajak Dan Retribusi Daerah</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                            <li class="breadcrumb-item active">Pajak Dan Retribusi Daerah</li>
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
                                <h3 class="card-title">Pajak Dan Retribusi Daerah</h3>
                            </div>
                            <div class="col-sm-2">
                                <a href="<?= url('/') ?>/penyeberangan/pdfPajak&RetribusiDaerah/{{$pajak_list->id}}">
                                    <button type="button" class="btn btn-block bg-gradient-primary"><i class="fas fa-file-pdf"> Cetak</i></button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">

                        <?php
                        $tgl = \Carbon\Carbon::parse($pajak_list->tgl)->format('D');
                        $tgl = str_replace('Sun', 'Minggu', $tgl);
                        $tgl = str_replace('Mon', 'Senin', $tgl);
                        $tgl = str_replace('Tue', 'Selasa', $tgl);
                        $tgl = str_replace('Wed', 'Rabu', $tgl);
                        $tgl = str_replace('Thu', 'Kamis', $tgl);
                        $tgl = str_replace('Fri', 'Jumat', $tgl);
                        $tgl = str_replace('Sat', 'Sabtu', $tgl);
                        ?>
                        <div class="row">
                            <div class="col-sm-2">
                                <p style="font-size: 18px">Hari : {{$tgl}}</p>
                            </div>
                        </div><div class="row">
                            <div class="col-sm-2">
                                <p style="font-size: 18px">Tanggal : {{\Carbon\Carbon::parse($pajak_list->tgl)->format('d/M/Y')}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#editJumlah"><i class="fas fa-edit"> Jumlah</i></button>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#editBiaya"><i class="fas fa-edit"> Biaya</i></button>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#editKeterangan"><i class="fas fa-edit"> Keterangan</i></button>
                            </div>
                        </div>
                        <br>

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th colspan="2">Jenis Jasa</th>
                                <th>Jumlah</th>
                                <th>Satuan</th>
                                <th>Biaya (Rp)</th>
                                <th>Jumlah (Rp)</th>
                                <th>Keterangan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td colspan="2">Labuh Kapal</td>
                                <td>{{$labuh_kapal[0]}}</td>
                                <td>GT</td>
                                <td>{{$labuh_kapal[1]}}</td>
                                @if($labuh_kapal[0] != '' && $labuh_kapal[1] != '')
                                    <td>{{$labuh_kapal[0] * $labuh_kapal[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$labuh_kapal[2]}}</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td colspan="2">Tambat / Sandar Kapal</td>
                                <td>{{$tambat[0]}}</td>
                                <td>GT</td>
                                <td>{{$tambat[1]}}</td>
                                @if($tambat[0] != '' && $tambat[1] != '')
                                    <td>{{$tambat[0] * $tambat[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$tambat[2]}}</td>
                            </tr>
                            <tr>
                                <td rowspan="3">3</td>
                                <td colspan="2">Dermaga</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="width: 10px">a.</td>
                                <td>Barang</td>
                                <td>{{$barang[0]}}</td>
                                <td>TON/M3</td>
                                <td>{{$barang[1]}}</td>
                                @if($barang[0] != '' && $barang[1] != '')
                                    <td>{{$barang[0] * $barang[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$barang[2]}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px">b.</td>
                                <td>Hewan</td>
                                <td>{{$hewan[0]}}</td>
                                <td>EKOR</td>
                                <td>{{$hewan[1]}}</td>
                                @if($hewan[0] != '' && $hewan[1] != '')
                                    <td>{{$hewan[0] * $hewan[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$hewan[2]}}</td>
                            </tr>
                            <tr>
                                <td rowspan="4">4</td>
                                <td colspan="2">Penumpukan</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="width: 10px">a.</td>
                                <td>Gudang</td>
                                <td>{{$gudang[0]}}</td>
                                <td>TON/M3</td>
                                <td>{{$gudang[1]}}</td>
                                @if($gudang[0] != '' && $gudang[1] != '')
                                    <td>{{$gudang[0] * $gudang[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$gudang[2]}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px">b.</td>
                                <td>Lapangan</td>
                                <td>{{$lapangan[0]}}</td>
                                <td>HARI</td>
                                <td>{{$lapangan[1]}}</td>
                                @if($lapangan[0] != '' && $lapangan[1] != '')
                                    <td>{{$lapangan[0] * $lapangan[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$lapangan[2]}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px">c.</td>
                                <td>Penyimpanan</td>
                                <td>{{$penyimpanan[0]}}</td>
                                <td>HARI</td>
                                <td>{{$penyimpanan[1]}}</td>
                                @if($penyimpanan[0] != '' && $penyimpanan[1] != '')
                                    <td>{{$penyimpanan[0] * $penyimpanan[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$penyimpanan[2]}}</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td colspan="2">Pas Penumpang</td>
                                <td>{{$pas_penumpang[0]}}</td>
                                <td>Orang</td>
                                <td>{{$pas_penumpang[1]}}</td>
                                @if($pas_penumpang[0] != '' && $pas_penumpang[1] != '')
                                    <td>{{$pas_penumpang[0] * $pas_penumpang[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$pas_penumpang[2]}}</td>
                            </tr>
                            <tr>
                                <td rowspan="9">6</td>
                                <td colspan="2">Pas Kendaraan</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="width: 10px">a.</td>
                                <td>Golongan I (Sepeda)</td>
                                <td>{{$gol1[0]}}</td>
                                <td>Kendaraan</td>
                                <td>{{$gol1[1]}}</td>
                                @if($gol1[0] != '' && $gol1[1] != '')
                                    <td>{{$gol1[0] * $gol1[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$gol1[2]}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px">b.</td>
                                <td>Golongan II (Sepeda Motor)</td>
                                <td>{{$gol2[0]}}</td>
                                <td>Kendaraan</td>
                                <td>{{$gol2[1]}}</td>
                                @if($gol2[0] != '' && $gol2[1] != '')
                                    <td>{{$gol2[0] * $gol2[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$gol2[2]}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px">c.</td>
                                <td>Golongan III (Roda 3)</td>
                                <td>{{$gol3[0]}}</td>
                                <td>Kendaraan</td>
                                <td>{{$gol3[1]}}</td>
                                @if($gol3[0] != '' && $gol3[1] != '')
                                    <td>{{$gol3[0] * $gol3[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$gol3[2]}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px">d.</td>
                                <td>Golongan IV (Roda 4)</td>
                                <td>{{$gol4[0]}}</td>
                                <td>Kendaraan</td>
                                <td>{{$gol4[1]}}</td>
                                @if($gol4[0] != '' && $gol4[1] != '')
                                    <td>{{$gol4[0] * $gol4[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$gol4[2]}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px">e.</td>
                                <td>Golongan V (Truk Sedang Roda 6)</td>
                                <td>{{$gol5[0]}}</td>
                                <td>Kendaraan</td>
                                <td>{{$gol5[1]}}</td>
                                @if($gol5[0] != '' && $gol5[1] != '')
                                    <td>{{$gol5[0] * $gol5[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$gol5[2]}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px">f.</td>
                                <td>Golongan VI (Truk Besar Roda 8)</td>
                                <td>{{$gol6[0]}}</td>
                                <td>Kendaraan</td>
                                <td>{{$gol6[1]}}</td>
                                @if($gol6[0] != '' && $gol6[1] != '')
                                    <td>{{$gol6[0] * $gol6[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$gol6[2]}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px">g.</td>
                                <td>Golongan VII (Truk Besar Roda 8)</td>
                                <td>{{$gol7[0]}}</td>
                                <td>Kendaraan</td>
                                <td>{{$gol7[1]}}</td>
                                @if($gol7[0] != '' && $gol7[1] != '')
                                    <td>{{$gol7[0] * $gol7[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$gol7[2]}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10px">h.</td>
                                <td>Golongan VIII (Truk Besar Roda 8)</td>
                                <td>{{$gol8[0]}}</td>
                                <td>Kendaraan</td>
                                <td>{{$gol8[1]}}</td>
                                @if($gol8[0] != '' && $gol8[1] != '')
                                    <td>{{$gol8[0] * $gol8[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$gol8[2]}}</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td colspan="2">Fasilitas Papan Reklame</td>
                                <td>{{$papan_reklame[0]}}</td>
                                <td>MD/Bulan</td>
                                <td>{{$papan_reklame[1]}}</td>
                                @if($papan_reklame[0] != '' && $papan_reklame[1] != '')
                                    <td>{{$papan_reklame[0] * $papan_reklame[1]}}</td>
                                @else
                                    <td></td>
                                @endif
                                <td>{{$papan_reklame[2]}}</td>
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

    <!-- Modal Edit Jumlah -->
    <div class="modal fade" id="editJumlah" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Jumlah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= url('/') ?>/penyeberangan/editPajak&RetribusiDaerah/{{$pajak_list->id}}/0" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Labuh Kapal</label>
                            <div class="input-group mb-3">
                                <input name="labuh_kapal" type="number" class="form-control" value="{{$labuh_kapal[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tambat / Sandar Kapal</label>
                            <div class="input-group mb-3">
                                <input name="tambat" type="number" class="form-control" value="{{$tambat[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Barang</label>
                            <div class="input-group mb-3">
                                <input name="barang" type="number" class="form-control" value="{{$barang[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Hewan</label>
                            <div class="input-group mb-3">
                                <input name="hewan" type="number" class="form-control" value="{{$hewan[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Gudang</label>
                            <div class="input-group mb-3">
                                <input name="gudang" type="number" class="form-control" value="{{$gudang[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Lapangan</label>
                            <div class="input-group mb-3">
                                <input name="lapangan" type="number" class="form-control" value="{{$lapangan[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Penyimpanan</label>
                            <div class="input-group mb-3">
                                <input name="penyimpanan" type="number" class="form-control" value="{{$penyimpanan[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pas Penumpang</label>
                            <div class="input-group mb-3">
                                <input name="pas_penumpang" type="number" class="form-control" value="{{$pas_penumpang[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan I</label>
                            <div class="input-group mb-3">
                                <input name="gol_1" type="number" class="form-control" value="{{$gol1[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan II</label>
                            <div class="input-group mb-3">
                                <input name="gol_2" type="number" class="form-control" value="{{$gol2[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan III</label>
                            <div class="input-group mb-3">
                                <input name="gol_3" type="number" class="form-control" value="{{$gol3[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan IV</label>
                            <div class="input-group mb-3">
                                <input name="gol_4" type="number" class="form-control" value="{{$gol4[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan V</label>
                            <div class="input-group mb-3">
                                <input name="gol_5" type="number" class="form-control" value="{{$gol5[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VI</label>
                            <div class="input-group mb-3">
                                <input name="gol_6" type="number" class="form-control" value="{{$gol6[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VII</label>
                            <div class="input-group mb-3">
                                <input name="gol_7" type="number" class="form-control" value="{{$gol7[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VIII</label>
                            <div class="input-group mb-3">
                                <input name="gol_8" type="number" class="form-control" value="{{$gol8[0]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Fasilitas Papan Reklame</label>
                            <div class="input-group mb-3">
                                <input name="papan_reklame" type="number" class="form-control" value="{{$papan_reklame[0]}}" required="">
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
    <!-- // Modal Edit Jumlah -->

    <!-- Modal Edit Biaya -->
    <div class="modal fade" id="editBiaya" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Biaya</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= url('/') ?>/penyeberangan/editPajak&RetribusiDaerah/{{$pajak_list->id}}/1" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Labuh Kapal</label>
                            <div class="input-group mb-3">
                                <input name="labuh_kapal" type="number" class="form-control" value="{{$labuh_kapal[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tambat / Sandar Kapal</label>
                            <div class="input-group mb-3">
                                <input name="tambat" type="number" class="form-control" value="{{$tambat[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Barang</label>
                            <div class="input-group mb-3">
                                <input name="barang" type="number" class="form-control" value="{{$barang[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Hewan</label>
                            <div class="input-group mb-3">
                                <input name="hewan" type="number" class="form-control" value="{{$hewan[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Gudang</label>
                            <div class="input-group mb-3">
                                <input name="gudang" type="number" class="form-control" value="{{$gudang[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Lapangan</label>
                            <div class="input-group mb-3">
                                <input name="lapangan" type="number" class="form-control" value="{{$lapangan[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Penyimpanan</label>
                            <div class="input-group mb-3">
                                <input name="penyimpanan" type="number" class="form-control" value="{{$penyimpanan[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pas Penumpang</label>
                            <div class="input-group mb-3">
                                <input name="pas_penumpang" type="number" class="form-control" value="{{$pas_penumpang[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan I</label>
                            <div class="input-group mb-3">
                                <input name="gol_1" type="number" class="form-control" value="{{$gol1[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan II</label>
                            <div class="input-group mb-3">
                                <input name="gol_2" type="number" class="form-control" value="{{$gol2[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan III</label>
                            <div class="input-group mb-3">
                                <input name="gol_3" type="number" class="form-control" value="{{$gol3[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan IV</label>
                            <div class="input-group mb-3">
                                <input name="gol_4" type="number" class="form-control" value="{{$gol4[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan V</label>
                            <div class="input-group mb-3">
                                <input name="gol_5" type="number" class="form-control" value="{{$gol5[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VI</label>
                            <div class="input-group mb-3">
                                <input name="gol_6" type="number" class="form-control" value="{{$gol6[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VII</label>
                            <div class="input-group mb-3">
                                <input name="gol_7" type="number" class="form-control" value="{{$gol7[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VIII</label>
                            <div class="input-group mb-3">
                                <input name="gol_8" type="number" class="form-control" value="{{$gol8[1]}}" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Fasilitas Papan Reklame</label>
                            <div class="input-group mb-3">
                                <input name="papan_reklame" type="number" class="form-control" value="{{$papan_reklame[1]}}" required="">
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
    <!-- // Modal Edit Biaya -->

    <!-- Modal Edit Keterangan -->
    <div class="modal fade" id="editKeterangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Keterangan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= url('/') ?>/penyeberangan/editPajak&RetribusiDaerah/{{$pajak_list->id}}/2" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Labuh Kapal</label>
                            <div class="input-group mb-3">
                                <input name="labuh_kapal" type="text" class="form-control" value="{{$labuh_kapal[2]}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tambat / Sandar Kapal</label>
                            <div class="input-group mb-3">
                                <input name="tambat" type="text" class="form-control" value="{{$tambat[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Barang</label>
                            <div class="input-group mb-3">
                                <input name="barang" type="text" class="form-control" value="{{$barang[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Hewan</label>
                            <div class="input-group mb-3">
                                <input name="hewan" type="text" class="form-control" value="{{$hewan[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Gudang</label>
                            <div class="input-group mb-3">
                                <input name="gudang" type="text" class="form-control" value="{{$gudang[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Lapangan</label>
                            <div class="input-group mb-3">
                                <input name="lapangan" type="text" class="form-control" value="{{$lapangan[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Penyimpanan</label>
                            <div class="input-group mb-3">
                                <input name="penyimpanan" type="text" class="form-control" value="{{$penyimpanan[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pas Penumpang</label>
                            <div class="input-group mb-3">
                                <input name="pas_penumpang" type="text" class="form-control" value="{{$pas_penumpang[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan I</label>
                            <div class="input-group mb-3">
                                <input name="gol_1" type="text" class="form-control" value="{{$gol1[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan II</label>
                            <div class="input-group mb-3">
                                <input name="gol_2" type="text" class="form-control" value="{{$gol2[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan III</label>
                            <div class="input-group mb-3">
                                <input name="gol_3" type="text" class="form-control" value="{{$gol3[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan IV</label>
                            <div class="input-group mb-3">
                                <input name="gol_4" type="text" class="form-control" value="{{$gol4[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan V</label>
                            <div class="input-group mb-3">
                                <input name="gol_5" type="text" class="form-control" value="{{$gol5[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VI</label>
                            <div class="input-group mb-3">
                                <input name="gol_6" type="text" class="form-control" value="{{$gol6[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VII</label>
                            <div class="input-group mb-3">
                                <input name="gol_7" type="text" class="form-control" value="{{$gol7[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Golongan VIII</label>
                            <div class="input-group mb-3">
                                <input name="gol_8" type="text" class="form-control" value="{{$gol8[2]}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Fasilitas Papan Reklame</label>
                            <div class="input-group mb-3">
                                <input name="papan_reklame" type="text" class="form-control" value="{{$papan_reklame[2]}}" >
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
    <!-- // Modal Edit Keterangan -->
@endsection
