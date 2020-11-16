@section('title')
    SIMOPEL-Riau | Sewa Perairan
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
                        <h1 class="m-0 text-dark">Sewa Perairan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                            <li class="breadcrumb-item active">Sewa Perairan</li>
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
                        <h3 class="card-title">Sewa Perairan</h3>
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
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Sewa Perairan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= url('/') ?>/tukstersus/tambahSewaPerairan" method="post">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>TERSUS / Tersus</label>
                                                    <div class="input-group mb-3">
                                                        <select class="form-control select2" style="width: 100%;" name="tuks_tersus" required>
                                                            <option selected="selected">-- Pilih Data --</option>
                                                            <option value="TERSUS">TERSUS</option>
                                                            <option value="TUKS">TUKS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>No Perjanjian</label>
                                                    <div class="input-group mb-3">
                                                        <input name="no_perjanjian" type="text" class="form-control" placeholder="No Perjanjian" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Periode Perjanjian Awal</label>
                                                    <div class="input-group mb-3">
                                                        <input name="awal" type="date" class="form-control" placeholder="Periode Perjanjian Awal" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Periode Perjanjian Akhir</label>
                                                    <div class="input-group mb-3">
                                                        <input name="akhir" type="date" class="form-control" placeholder="Periode Perjanjian Akhir" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Luas Perairan</label>
                                                    <div class="input-group mb-3">
                                                        <input name="luas_perairan" type="text" class="form-control" placeholder="Luas Perairan" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tarif</label>
                                                    <div class="input-group mb-3">
                                                        <input name="tarif" type="text" class="form-control" placeholder="Tarif" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah Pungutan/Periode</label>
                                                    <div class="input-group mb-3">
                                                        <input name="pungutan" type="number" class="form-control" placeholder="Jumlah Pungutan/Periode" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Denda</label>
                                                    <div class="input-group mb-3">
                                                        <input name="denda" type="number" class="form-control" placeholder="Denda" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Total</label>
                                                    <div class="input-group mb-3">
                                                        <input name="total" type="number" class="form-control" placeholder="Total" required>
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
                                            <form action="<?= url('/') ?>/tukstersus/cetakPDFBulananSewaPerairan" method="post" >
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
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="card-body table-responsive p-0" style="height: auto;">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">TERSUS/TUKS</th>
                                    <th rowspan="2">No Perjanjian</th>
                                    <th colspan="2">Periode Perjanjian</th>
                                    <th rowspan="2">Luas Perairan</th>
                                    <th rowspan="2">Tarif</th>
                                    <th rowspan="2">Jumlah Pungutan /Periode</th>
                                    <th rowspan="2">Denda</th>
                                    <th rowspan="2">Total Pembayaran</th>
                                    <th rowspan="2">Keterangan</th>
                                    <th rowspan="2">Aksi</th>
                                </tr>
                                <tr>
                                    <th>Awal</th>
                                    <th>Akhir</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 0;
                                foreach ($sewaperairan_list as $sewaperairan):
                                $no++;
                                ?>
                                <tr>
                                    <td style="width: 10px">{{ $no }}</td>
                                    <td>{{$sewaperairan->tuks_tersus}}</td>
                                    <td>{{$sewaperairan->no_perjanjian}}</td>
                                    <td>{{\Carbon\Carbon::parse($sewaperairan->awal)->format('d/m/Y')}}</td>
                                    <td>{{\Carbon\Carbon::parse($sewaperairan->akhir)->format('d/m/Y')}}</td>
                                    <td>{{$sewaperairan->luas_perairan}}</td>
                                    <td>{{$sewaperairan->tarif}}</td>
                                    <td>{{$sewaperairan->pungutan}}</td>
                                    <td>{{$sewaperairan->denda}}</td>
                                    <td>{{$sewaperairan->total}}</td>
                                    <td>{{$sewaperairan->ket}}</td>
                                    <td align="center">
                                        <!-- Detail Pelabuhan -->
                                        <a href="#" class="btn btn-sm bg-gradient-primary" data-toggle="modal" data-target="#editBongkarMuat{{$sewaperairan->id}}"><i class="fas fa-pen-alt"></i></a>
                                        <div class="modal fade" id="editBongkarMuat{{$sewaperairan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Bongkar Muat</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?= url('/') ?>/tukstersus/editSewaPerairan/{{$sewaperairan->id}}" method="post">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label>TERSUS</label>
                                                                <div class="input-group mb-3">
                                                                    <select class="form-control select2" style="width: 100%;" name="tuks_tersus" required>
                                                                        <option>-- Pilih Data --</option>
                                                                        @if($sewaperairan->tuks_tersus == 'TERSUS')
                                                                            <option selected value="TERSUS">TERSUS</option>
                                                                            <option value="TUKS">TUKS</option>
                                                                        @else
                                                                            <option value="TERSUS">TERSUS</option>
                                                                            <option selected value="TUKS">TUKS</option>
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Np Perjanjian</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="no_perjanjian" type="text" class="form-control" value="{{$sewaperairan->no_perjanjian}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Periode Perjanjian Awal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="awal" type="date" class="form-control" value="{{$sewaperairan->awal}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Periode Perjanjian Akhir</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="akhir" type="date" class="form-control" value="{{$sewaperairan->akhir}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Luas Perjanjian</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="luas_perairan" type="text" class="form-control" value="{{$sewaperairan->luas_perairan}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tarif</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="tarif" type="text" class="form-control" value="{{$sewaperairan->tarif}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jumlah Pungutan/Periode</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="pungutan" type="number" class="form-control" value="{{$sewaperairan->pungutan}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Denda</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="denda" type="number" class="form-control" value="{{$sewaperairan->denda}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Total</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="total" type="number" class="form-control" value="{{$sewaperairan->total}}" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="ket" type="text" class="form-control" value="{{$sewaperairan->ket}}">
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
                                        <a href="#" class="btn btn-sm bg-gradient-danger" data-toggle="modal" data-target="#hapusSewaPerairan{{$sewaperairan->id}}"><i class="fas fa-trash"></i></a>
                                        <div class="modal fade" id="hapusSewaPerairan{{$sewaperairan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
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
                                                            <a href="<?= url('/') ?>/tukstersus/hapusSewaPerairan/{{$sewaperairan->id}}"><button type="submit" class="btn bg-gradient-danger">Yes</button></a>
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
