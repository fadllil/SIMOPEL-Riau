@section('title')
    SIMOPEL-Riau | Profil
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
                                        <input type="text" class="form-control" value="{{$user->nama_perusahaan}}" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Penanggung Jawab</label>
                                        <input type="text" class="form-control" value="{{$user->nama_pj}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Alamat Perusahaan</label>
                                        <textarea class="form-control" rows="3" disabled>{{$user->alamat_perusahaan}}</textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Alamat Penanggung Jawab</label>
                                        <textarea class="form-control" rows="3" disabled>{{$user->alamat_pj}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Bidang Usaha</label>
                                        <input type="text" class="form-control" value="{{$user->bidang_usaha}}" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nomor Izin Usaha</label>
                                        <input type="text" class="form-control" value="{{$user->nomor_izin_usaha}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tanggal Izin Usaha</label>
                                        <input type="text" class="form-control" value="{{$user->tgl_izin_usaha}}" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>NPWP</label>
                                        <input type="text" class="form-control" value="{{$user->npwp}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-block bg-gradient-primary" data-toggle="modal" data-target="#editPerusahaan{{$user->id}}"><i class="fas fa-edit"> Edit</i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- Modal Edit Perusahaan -->
    <div class="modal fade" id="editPerusahaan{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Data Perusahaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= url('/') ?>/kegiatanpenunjang/editPerusahaan/{{$user->id}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <div class="input-group mb-3">
                                <input name="nama_perusahaan" type="text" class="form-control" value="{{$user->nama_perusahaan}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat Perusahaan</label>
                            <div class="input-group mb-3">
                                <input name="alamat_perusahaan" type="text" class="form-control" value="{{$user->alamat_perusahaan}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Bidang Usaha</label>
                            <div class="input-group mb-3">
                                <input name="bidang_usaha" type="text" class="form-control" value="{{$user->bidang_usaha}}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Penanggung Jawab</label>
                            <div class="input-group mb-3">
                                <input name="nama_pj" type="text" class="form-control" value="{{$user->nama_pj}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat Penanggung Jawab</label>
                            <div class="input-group mb-3">
                                <input name="alamat_pj" type="text" class="form-control" value="{{$user->alamat_pj}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nomor Izin Usaha</label>
                            <div class="input-group mb-3">
                                <input name="nomor_izin_usaha" type="text" class="form-control" value="{{$user->nomor_izin_usaha}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Izin Usaha</label>
                            <div class="input-group mb-3">
                                <input name="tgl_izin_usaha" type="text" class="form-control" value="{{$user->tgl_izin_usaha}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>NPWP</label>
                            <div class="input-group mb-3">
                                <input name="npwp" type="text" class="form-control" value="{{$user->npwp}}" required>
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
    <!-- /End Modal Edit Perusahaan -->
@endsection
