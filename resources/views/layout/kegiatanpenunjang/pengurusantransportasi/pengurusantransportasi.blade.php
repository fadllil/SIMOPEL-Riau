@section('title')
    SIMOPEL-Riau | Bongkar Muat
@endsection

@extends('main.kegiatanpenunjang.mainpengurusantransportasi')

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
                        <h1 class="m-0 text-dark">Perusahaan Pengurusan Transportasi</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                            <li class="breadcrumb-item active">Pengurusan Transportasi</li>
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
                        <h3 class="card-title">Pengurusan Transportasi</h3>
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
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Pengurusan Transportasi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= url('/') ?>/kegiatanpenunjang/tambahPengurusanTransportasi" method="post">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <div class="input-group mb-3">
                                                        <input name="tanggal" type="date" class="form-control" placeholder="Tanggal" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Barang</label>
                                                    <div class="input-group mb-3">
                                                        <input name="nama_barang" type="text" class="form-control" placeholder="Nama Barang" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Kapal</label>
                                                    <div class="input-group mb-3">
                                                        <input name="nama_kapal" type="text" class="form-control" placeholder="Nama Kapal" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Kemasan</label>
                                                    <div class="input-group mb-3">
                                                        <input name="jenis" type="text" class="form-control" placeholder="Jenis Kemasan" required="">
                                                    </div>
                                                </div>
                                                <label>IN Klaring</label>
                                                <div class="form-group">
                                                    <label>Impor (TONASE)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="import_tonase" type="number" class="form-control" placeholder="Import (TONASE)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Import (PIB)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="import_pib" type="number" class="form-control" placeholder="Import (PIB)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Antar Pulau (TONASE)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="in_ap_tonase" type="number" class="form-control" placeholder="Antar Pulau (TONASE)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Antar Pulau (PMB)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="in_ap_pmb" type="number" class="form-control" placeholder="Antar Pulau (PMB)" required="">
                                                    </div>
                                                </div>
                                                <label>UNIT Klaring</label>
                                                <div class="form-group">
                                                    <label>Ekspor (TONASE)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="ekspor_tonase" type="number" class="form-control" placeholder="Ekspor (TONASE)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ekspor (PEB)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="ekspor_peb" type="number" class="form-control" placeholder="Ekspor (PEB)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Antar Pulau (TONASE)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="uit_ap_tonase" type="number" class="form-control" placeholder="Antar Pulau (TONASE)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Antar Pulau (PMB)</label>
                                                    <div class="input-group mb-3">
                                                        <input name="uit_ap_pmb" type="number" class="form-control" placeholder="Antar Pulau (PMB)" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah Tonase</label>
                                                    <div class="input-group mb-3">
                                                        <input name="jumlah_tonase" type="number" class="form-control" placeholder="Jumlah Tonase" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah IN + UIT</label>
                                                    <div class="input-group mb-3">
                                                        <input name="jumlah_in_uit" type="number" class="form-control" placeholder="Jumlah IN + UIT" required="">
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
                                            <form action="<?= url('/') ?>/kegiatanpenunjang/cetakPDFBulananPengurusanTransportasi" method="post" >
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
                                            <form action="<?= url('/') ?>/kegiatanpenunjang/cetakPDFTahunanPengurusanTransportasi" method="post" >
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
                                    <th rowspan="3">Tanggal</th>
                                    <th rowspan="3">Nama Barang</th>
                                    <th rowspan="3">Nama Kapal</th>
                                    <th rowspan="3">Jenis Kemasan</th>
                                    <th colspan="4">IN KLARING</th>
                                    <th colspan="4">UNIT KLARING</th>
                                    <th rowspan="3">Jumlah Tonase</th>
                                    <th rowspan="3">Jumlah IN + UIT</th>
                                    <th rowspan="3">Aksi</th>
                                </tr>
                                <tr>
                                    <th colspan="2">Impor</th>
                                    <th colspan="2">Antar Pulau</th>
                                    <th colspan="2">Ekspor</th>
                                    <th colspan="2">Antar Pulau</th>
                                </tr>
                                <tr>
                                    <th>TONASE</th>
                                    <th>PIB</th>
                                    <th>TONASE</th>
                                    <th>PMB</th>
                                    <th>TONASE</th>
                                    <th>PEB</th>
                                    <th>TONASE</th>
                                    <th>PMB</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 0;
                                foreach ($pengurusantransportasi_list as $pengurusantransportasi):
                                $no++;
                                ?>
                                <tr>
                                    <td style="width: 10px">{{ $no }}</td>
                                    <td>{{\Carbon\Carbon::parse($pengurusantransportasi->tanggal)->format('d/m/Y')}}</td>
                                    <td>{{$pengurusantransportasi->nama_barang}}</td>
                                    <td>{{$pengurusantransportasi->nama_kapal}}</td>
                                    <td>{{$pengurusantransportasi->jenis}}</td>
                                    <td>{{$pengurusantransportasi->import_tonase}}</td>
                                    <td>{{$pengurusantransportasi->import_pib}}</td>
                                    <td>{{$pengurusantransportasi->in_ap_tonase}}</td>
                                    <td>{{$pengurusantransportasi->in_ap_pmb}}</td>
                                    <td>{{$pengurusantransportasi->ekspor_tonase}}</td>
                                    <td>{{$pengurusantransportasi->ekspor_peb}}</td>
                                    <td>{{$pengurusantransportasi->uit_ap_tonase}}</td>
                                    <td>{{$pengurusantransportasi->uit_ap_pmb}}</td>
                                    <td>{{$pengurusantransportasi->jumlah_tonase}}</td>
                                    <td>{{$pengurusantransportasi->jumlah_in_uit}}</td>
                                    <td align="center">
                                        <!-- Edit Perla -->
                                        <a href="#" class="btn btn-sm bg-gradient-primary" data-toggle="modal" data-target="#editPengurusanTransportasi{{$pengurusantransportasi->id}}"><i class="fas fa-pen-alt"></i></a>
                                        <div class="modal fade" id="editPengurusanTransportasi{{$pengurusantransportasi->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Pengurusan Trasnportasi</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?= url('/') ?>/kegiatanpenunjang/editPengurusanTransportasi/{{$pengurusantransportasi->id}}" method="post">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label>Tanggal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="tanggal" type="date" class="form-control" value="{{$pengurusantransportasi->tanggal}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Barang</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="nama_barang" type="text" class="form-control" value="{{$pengurusantransportasi->nama_barang}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Kapal</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="nama_kapal" type="text" class="form-control" value="{{$pengurusantransportasi->tanggal}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jenis Kemasan</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="jenis" type="text" class="form-control" value="{{$pengurusantransportasi->jenis}}" required="">
                                                                </div>
                                                            </div>
                                                            <label>IN Klaring</label>
                                                            <div class="form-group">
                                                                <label>Import (TONASE)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="import_tonase" type="number" class="form-control" value="{{$pengurusantransportasi->import_tonase}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Impor (PIB)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="import_pib" type="number" class="form-control" value="{{$pengurusantransportasi->import_pib}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Antar Pulau (TONASE)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="in_ap_tonase" type="number" class="form-control" value="{{$pengurusantransportasi->in_ap_tonase}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Antar Pulau (PMB)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="in_ap_pmb" type="number" class="form-control" value="{{$pengurusantransportasi->in_ap_pmb}}" required="">
                                                                </div>
                                                            </div>
                                                            <label>UNIT Klaring</label>
                                                            <div class="form-group">
                                                                <label>Ekspor (TONASE)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="ekspor_tonase" type="number" class="form-control" value="{{$pengurusantransportasi->ekspor_tonase}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Ekspor (PEB)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="ekspor_peb" type="number" class="form-control" value="{{$pengurusantransportasi->ekspor_peb}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Antar Pulau (TONASE)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="uit_ap_tonase" type="number" class="form-control" value="{{$pengurusantransportasi->uit_ap_tonase}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Antar Pulau (PMB)</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="uit_ap_pmb" type="number" class="form-control" value="{{$pengurusantransportasi->uit_ap_pmb}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jumlah Tonase</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="jumlah_tonase" type="number" class="form-control" value="{{$pengurusantransportasi->jumlah_tonase}}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jumlah IN + UIT</label>
                                                                <div class="input-group mb-3">
                                                                    <input name="jumlah_in_uit" type="number" class="form-control" value="{{$pengurusantransportasi->jumlah_in_uit}}" required="">
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
                                        <a href="#" class="btn btn-sm bg-gradient-danger" data-toggle="modal" data-target="#hapusPengurusanTransportasi{{$pengurusantransportasi->id}}"><i class="fas fa-trash"></i></a>
                                        <div class="modal fade" id="hapusPengurusanTransportasi{{$pengurusantransportasi->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document" style="text-align : left;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Anda yakin ingin menghapus data Pengurusan Transportasi?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn bg-gradient-primary" data-dismiss="modal">Close</button>
                                                            <a href="<?= url('/') ?>/kegiatanpenunjang/hapusPengurusanTransportasi/{{$pengurusantransportasi->id}}"><button type="submit" class="btn bg-gradient-danger">Yes</button></a>
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
