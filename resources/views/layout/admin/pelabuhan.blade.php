@section('title')
    SIMOPEL-Riau | Pelabuhan
@endsection

@extends('main.main')

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
                        <h1 class="m-0 text-dark">Pelabuhan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                            <li class="breadcrumb-item active">Pelabuhan</li>
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
                        <h3 class="card-title">Data Pelabuhan</h3>
                    </div>
                    <!-- /.Button -->
                    <div class="tombol col-md-4">
                        <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#tambahData"><i class="fas fa-plus"> Tambah Data</i></button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Pelabuhan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= url('/') ?>/admin/tambahPelabuhan" method="post">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label>Username</label>
                                                <div class="input-group mb-3">
                                                    <input name="username" type="text" class="form-control" placeholder="Username" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <div class="input-group mb-3">
                                                    <input name="password" type="text" class="form-control" placeholder="Password" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <div class="input-group mb-3">
                                                    <input name="email" type="email" class="form-control" placeholder="Email@gmail.com" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Level Akses</label>
                                                <div class="input-group mb-3">
                                                    <input name="level_akses" type="text" class="form-control" value="Pelabuhan" readonly required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Pelabuhan</label>
                                                <div class="input-group mb-3">
                                                    <input name="nama_pelabuhan" type="text" class="form-control" placeholder="Nama Pelabuhan" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <div class="input-group mb-3">
                                                    <input name="alamat_pelabuhan" type="text" class="form-control" placeholder="Alamat" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Posisi Koordinat</label>
                                                <div class="input-group mb-3">
                                                    <input name="posisi_pelabuhan" type="text" class="form-control" placeholder="Posisi Koordinat" required>
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
                                    <th>Nama Pelabuhan</th>
                                    <th>Alamat Pelabuhan</th>
                                    <th>Posisi Koordinat</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 0;
                                foreach ($pelabuhan_list as $pelabuhan):
                                    $no++;
                                    ?>
                                <tr>
                                    <td style="width: 10px">{{ $no }}</td>
                                    <td>{{$pelabuhan->nama_pelabuhan}}</td>
                                    <td>{{$pelabuhan->alamat_pelabuhan}}</td>
                                    <td>{{$pelabuhan->posisi_pelabuhan}}</td>
                                    <td>{{$pelabuhan->email}}</td>
                                    <td align="center">
                                        <!-- Detail Pelabuhan -->
                                        <a href="#" class="btn btn-sm bg-gradient-primary" data-toggle="modal" data-target="#detailPelabuhan{{$pelabuhan->id}}"><i class="fas fa-pen-alt"></i></a>
                                        <div class="modal fade" id="detailPelabuhan{{$pelabuhan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Pelabuhan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?= url('/') ?>/admin/editPelabuhan/{{$pelabuhan->id}}" method="post">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label>Nama Pelabuhan</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="nama_pelabuhan" type="text" class="form-control" value="{{$pelabuhan->nama_pelabuhan}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Alamat</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="alamat_pelabuhan" type="text" class="form-control" value="{{$pelabuhan->alamat_pelabuhan}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Posisi Koordinat</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="posisi_pelabuhan" type="text" class="form-control" value="{{$pelabuhan->posisi_pelabuhan}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="email" type="email" class="form-control" value="{{$pelabuhan->email}}" required>
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
                                        <!-- End Detail Pelabuhan -->
                                        <!-- Hapus Pelabuhan -->
                                        <a href="#" class="btn btn-sm bg-gradient-danger" data-toggle="modal" data-target="#hapusPelabuhan{{$pelabuhan->id}}"><i class="fas fa-trash"></i></a>
                                        <div class="modal fade" id="hapusPelabuhan{{$pelabuhan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Anda yakin ingin menghapus data pelabuhan?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn bg-gradient-primary" data-dismiss="modal">Close</button>
                                                            <a href="<?= url('/') ?>/admin/hapusPelabuhan/{{$pelabuhan->id}}"><button type="submit" class="btn bg-gradient-danger">Yes</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Hapus Pelabuhan -->

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
