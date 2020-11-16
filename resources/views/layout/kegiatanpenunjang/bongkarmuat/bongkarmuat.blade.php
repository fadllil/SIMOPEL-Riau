@section('title')
    SIMOPEL-Riau | Bongkar Muat
@endsection

@extends('main.kegiatanpenunjang.mainbongkarmuat')

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
                        <h1 class="m-0 text-dark">Perusahaan Bongkar Muat</h1>
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
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Operasional</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= url('/') ?>/kegiatanpenunjang/tambahBongkarMuat" method="post">
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
                                                    <label>Ukuran</label>
                                                    <div class="input-group mb-3">
                                                        <input name="ukuran" type="text" class="form-control" placeholder="Ukuran" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Agen Perusahaan Angkutan Laut</label>
                                                    <div class="input-group mb-3">
                                                        <input name="nama_agen" type="text" class="form-control" placeholder="Nama Agen Perusahaan Angkutan Laut" required="">
                                                    </div>
                                                </div>
                                                <label>Kegiatan B/M</label>
                                                <div class="form-group">
                                                    <label>Jumlah B/M</label>
                                                    <div class="input-group mb-3">
                                                        <input name="jumlah_bm" type="number" class="form-control" placeholder="Jumlah B/M" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Mulai (Tanggal/Jam)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="mulai" type="datetime-local" class="form-control" placeholder="Mulai (Tanggal/Jam)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Selesai (Tanggal/Jam)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="selesai" type="datetime-local" class="form-control" placeholder="Selesai (Tanggal/Jam)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah Buruh</label>
                                                    <div class="input-group mb-3">
                                                        <input name="jumlah_buruh" type="number" class="form-control" placeholder="Jumlah Buruh" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Asal Barang</label>
                                                    <div class="input-group mb-3">
                                                        <input name="asal_barang" type="text" class="form-control" placeholder="Asal Barang" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tujuan</label>
                                                    <div class="input-group mb-3">
                                                        <input name="tujuan" type="text" class="form-control" placeholder="Tujuan" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis</label>
                                                    <div class="input-group mb-3">
                                                        <input name="jenis" type="text" class="form-control" placeholder="Jenis" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Penunjukan PBM</label>
                                                    <div class="input-group mb-3">
                                                        <input name="penunjukan" type="text" class="form-control" placeholder="Penunjukan PBM" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Keterangan</label>
                                                    <div class="input-group mb-3">
                                                        <input name="ket" type="text" class="form-control" placeholder="Keteragan">
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
                                            <form action="<?= url('/') ?>/kegiatanpenunjang/cetakPDFBulananBongkarMuat" method="post" >
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
                                            <form action="<?= url('/') ?>/kegiatanpenunjang/cetakPDFTahunanBongkarMuat" method="post" >
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
                                    <th rowspan="2">Bendera</th>
                                    <th rowspan="2">Ukuran DWT/GT/HPA</th>
                                    <th rowspan="2">Nama Agen Perusahaan Angkutan Laut</th>
                                    <th colspan="4">Kegitan B/M</th>
                                    <th rowspan="2">Asal Barang</th>
                                    <th rowspan="2">Tujuan</th>
                                    <th rowspan="2">Jenis</th>
                                    <th rowspan="2">Penunjukan PBM</th>
                                    <th rowspan="2">Ket</th>
                                    <th rowspan="2">Aksi</th>
                                </tr>
                                <tr>
                                    <th>Jumlah B/M</th>
                                    <th>Mulai B/M Tgl/Jam</th>
                                    <th>Selesai Tgl/Jam</th>
                                    <th>Jumlah Buruh</th>
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
                                    <td>{{$bongkarmuat->nama_kapal}}</td>
                                    <td>{{$bongkarmuat->bendera}}</td>
                                    <td>{{$bongkarmuat->ukuran}}</td>
                                    <td>{{$bongkarmuat->nama_agen}}</td>
                                    <td>{{$bongkarmuat->jumlah_bm}}</td>
                                    <td>{{\Carbon\Carbon::parse($bongkarmuat->mulai)->format('d/m/Y H:i')}}</td>
                                    <td>{{\Carbon\Carbon::parse($bongkarmuat->selesai)->format('d/m/Y H:i')}}</td>
                                    <td>{{$bongkarmuat->jumlah_buruh}}</td>
                                    <td>{{$bongkarmuat->asal_barang}}</td>
                                    <td>{{$bongkarmuat->tujuan}}</td>
                                    <td>{{$bongkarmuat->jenis}}</td>
                                    <td>{{$bongkarmuat->penunjukan}}</td>
                                    <td>{{$bongkarmuat->ket}}</td>
                                    <td align="center">
                                        <!-- Edit Perla -->
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
                                                        <form action="<?= url('/') ?>/kegiatanpenunjang/editBongkarMuat/{{$bongkarmuat->id}}" method="post">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label>Nama Kapal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="nama_kapal" type="text" class="form-control" value="{{$bongkarmuat->nama_kapal}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Berdera/Status Kapal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="bendera" type="text" class="form-control" value="{{$bongkarmuat->bendera}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Ukuran</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="ukuran" type="text" class="form-control" value="{{$bongkarmuat->ukuran}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Agen Perusahaan Angkutan Laut</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="nama_agen" type="text" class="form-control" value="{{$bongkarmuat->nama_agen}}" required="">
                                                                </div>
                                                            </div>
                                                            <label>Kegiatan B/M</label>
                                                            <div class="form-group">
                                                                <label>Jumlah B/M</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="jumlah_bm" type="number" class="form-control" value="{{$bongkarmuat->jumlah_bm}}" required="">
                                                                </div>
                                                            </div>

                                                            <?php
                                                            $mulai = strtotime($bongkarmuat->mulai);
                                                            $selesai = strtotime($bongkarmuat->selesai);
                                                            $mulai = date('Y-m-d\TH:i', $mulai);
                                                            $selesai = date('Y-m-d\TH:i', $selesai);
                                                            ?>
                                                            <div class="form-group">
                                                                <label>Mulai (Tanggal/Jam)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="mulai" type="datetime-local" class="form-control" value="{{$mulai}}"  required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Selesai (Tanggal/Jam)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="selesai" type="datetime-local" class="form-control" value="{{$selesai}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jumlah Buruh</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="jumlah_buruh" type="number" class="form-control" value="{{$bongkarmuat->jumlah_buruh}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Asal Barang</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="asal_barang" type="text" class="form-control" value="{{$bongkarmuat->asal_barang}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tujuan</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="tujuan" type="text" class="form-control" value="{{$bongkarmuat->tujuan}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jenis</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="jenis" type="text" class="form-control" value="{{$bongkarmuat->jenis}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Penunjukan PBM</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="penunjukan" type="text" class="form-control" value="{{$bongkarmuat->penunjukan}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="ket" type="text" class="form-control" value="{{$bongkarmuat->keterangan}}">
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
                                                            <a href="<?= url('/') ?>/kegiatanpenunjang/hapusBongkarMuat/{{$bongkarmuat->id}}"><button type="submit" class="btn bg-gradient-danger">Yes</button></a>
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
