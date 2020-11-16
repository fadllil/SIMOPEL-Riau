@section('title')
    SIMOPEL-Riau | Tuks/Tersus
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
                        <h1 class="m-0 text-dark">Tuks/Tersus</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                            <li class="breadcrumb-item active">Tuks/Tersus</li>
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
                        <h3 class="card-title">Data Tuks/Tersus</h3>
                    </div>
                    <!-- /.Button -->
                    <div class="tombol col-md-4">
                        <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#tambahData"><i class="fas fa-plus"> Tambah Data</i></button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Perusahaan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= url('/') ?>/admin/tambahTuksTersus" method="post">
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
                                                <label>Level Akses</label>
                                                <div class="input-group mb-3">
                                                    <input name="level_akses" type="text" class="form-control" value="Tuks/Tersus" readonly required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Perusahaan</label>
                                                <div class="input-group mb-3">
                                                    <input name="nama_perusahaan" type="text" class="form-control" placeholder="Nama Perusahaan" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat Perusahaan</label>
                                                <div class="input-group mb-3">
                                                    <input name="alamat_perusahaan" type="text" class="form-control" placeholder="Alamat" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Bidang Usaha</label>
                                                <div class="input-group mb-3">
                                                    <input name="bidang_usaha" type="text" class="form-control" placeholder="Bidang Usaha" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>NPWP</label>
                                                <div class="input-group mb-3">
                                                    <input name="npwp" type="text" class="form-control" placeholder="NPWP" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>NIB</label>
                                                <div class="input-group mb-3">
                                                    <input name="nib" type="text" class="form-control" placeholder="NIB" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Penanggung Jawab</label>
                                                <div class="input-group mb-3">
                                                    <input name="nama_pj" type="text" class="form-control" placeholder="Nama Penanggung Jawab" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Posisi Koordinat</label>
                                                <div class="input-group mb-3">
                                                    <input name="posisi_perusahaan" type="text" class="form-control" placeholder="Posisi Koordinat" required>
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
                                    <th rowspan="2" style="width: 10px;">No</th>
                                    <th colspan="2">Perusahaan</th>
                                    <th rowspan="2">Bidang Usaha</th>
                                    <th rowspan="2">NPWP</th>
                                    <th rowspan="2">NIB</th>
                                    <th rowspan="2">Nama Penanggung Jawab</th>
                                    <th rowspan="2">Posisi Koordinat</th>
                                    <th rowspan="2">Aksi</th>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 0;
                                foreach ($tukstersus_list as $tukstersus):
                                $no++;
                                ?>
                                <tr>
                                    <td style="width: 10px">{{ $no }}</td>
                                    <td>{{$tukstersus->nama_perusahaan}}</td>
                                    <td>{{$tukstersus->alamat_perusahaan}}</td>
                                    <td>{{$tukstersus->bidang_usaha}}</td>
                                    <td>{{$tukstersus->npwp}}</td>
                                    <td>{{$tukstersus->nib}}</td>
                                    <td>{{$tukstersus->nama_pj}}</td>
                                    <td>{{$tukstersus->posisi_perusahaan}}</td>
                                    <td align="center">
                                        <!-- Detail Pelabuhan -->
                                        <a href="#" class="btn btn-sm bg-gradient-primary" data-toggle="modal" data-target="#detailTuksTersus{{$tukstersus->id}}"><i class="fas fa-pen-alt"></i></a>
                                        <div class="modal fade" id="detailTuksTersus{{$tukstersus->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Perusahaan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?= url('/') ?>/admin/editTuksTersus/{{$tukstersus->id}}" method="post">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label>Nama Perusahaan</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="nama_perusahaan" type="text" class="form-control" value="{{$tukstersus->nama_perusahaan}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Alamat</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="alamat_perusahaan" type="text" class="form-control" value="{{$tukstersus->alamat_perusahaan}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Bidang Usaha</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="bidang_usaha" type="text" class="form-control" value="{{$tukstersus->bidang_usaha}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>NPWP</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="npwp" type="text" class="form-control" value="{{$tukstersus->npwp}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>NIB</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="NIB" type="text" class="form-control" value="{{$tukstersus->nib}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Penanggung Jawab</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="nama_pj" type="text" class="form-control" value="{{$tukstersus->nama_pj}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Posisi Koordinat</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="posisi_perusahaan" type="text" class="form-control" value="{{$tukstersus->posisi_perusahaan}}" required>
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
                                        <a href="#" class="btn btn-sm bg-gradient-danger" data-toggle="modal" data-target="#hapusTuksTersus{{$tukstersus->id}}"><i class="fas fa-trash"></i></a>
                                        <div class="modal fade" id="hapusTuksTersus{{$tukstersus->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Anda yakin ingin menghapus data perusahaan?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn bg-gradient-primary" data-dismiss="modal">Close</button>
                                                            <a href="<?= url('/') ?>/admin/hapusTuksTersus/{{$tukstersus->id}}"><button type="submit" class="btn bg-gradient-danger">Yes</button></a>
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
