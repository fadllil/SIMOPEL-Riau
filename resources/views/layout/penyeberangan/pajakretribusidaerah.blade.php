@section('title')
    SIMOPEL-Riau | Pajak Dan Retribusi Daerah
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
                        <h1 class="m-0 text-dark">Pajak Dan Retribusi Daerah</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                            <li class="breadcrumb-item active">Pajak Dan Retribusi Daerah</li>
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
                        <h3 class="card-title">Pajak Dan Retribusi Daerah</h3>
                    </div>
                    <!-- /.Button -->
                    <div class="tombol col-md-4">
                        <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#tambahData"><i class="fas fa-plus"> Tambah Data</i></button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Pajak Dan Retribusi Daerah</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= url('/') ?>/penyeberangan/tambahPajak&RetribusiDaerah" method="post">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <div class="input-group mb-3">
                                                    <input name="tgl" type="date" class="form-control" placeholder="Tanggal" required>
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="card-body table-responsive p-0" style="height: auto;">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Hari</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 0;
                                foreach ($pajak_list as $pajak):
                                $no++;
                                ?>
                                <tr>
                                    <td style="width: 10px">{{ $no }}</td>
                                    <?php
                                    $tgl = \Carbon\Carbon::parse($pajak->tgl)->format('D');
                                    $tgl = str_replace('Sun', 'Minggu', $tgl);
                                    $tgl = str_replace('Mon', 'Senin', $tgl);
                                    $tgl = str_replace('Tue', 'Selasa', $tgl);
                                    $tgl = str_replace('Wed', 'Rabu', $tgl);
                                    $tgl = str_replace('Thu', 'Kamis', $tgl);
                                    $tgl = str_replace('Fri', 'Jumat', $tgl);
                                    $tgl = str_replace('Sat', 'Sabtu', $tgl);
                                    ?>
                                    <td>{{$tgl}}</td>
                                    <td>{{\Carbon\Carbon::parse($pajak->tgl)->format('d/m/Y')}}</td>
                                    <td align="center">
                                        <!-- Detail Penyeberangan -->
                                        <a href="<?= url('/') ?>/penyeberangan/detailPajak&RetribusiDaerah/{{$pajak->id}}" class="btn btn-sm bg-gradient-primary"><i class="fas fa-pen-alt"></i></a>
                                        <!-- Hapus Pajak Dan Retribusi Daerah -->
                                        <a href="#" class="btn btn-sm bg-gradient-danger" data-toggle="modal" data-target="#hapusPajakRetribusiDaerah{{$pajak->id}}"><i class="fas fa-trash"></i></a>
                                        <div class="modal fade" id="hapusPajakRetribusiDaerah{{$pajak->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Anda yakin ingin menghapus data Pajak Dan Retribusi Daerah?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn bg-gradient-primary" data-dismiss="modal">Close</button>
                                                            <a href="<?= url('/') ?>/penyeberangan/hapusPajak&RetribusiDaerah/{{$pajak->id}}"><button type="submit" class="btn bg-gradient-danger">Yes</button></a>
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
