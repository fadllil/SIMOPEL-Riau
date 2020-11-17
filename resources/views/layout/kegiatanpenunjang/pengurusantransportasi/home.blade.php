@section('title')
    SIMOPEL-Riau | Home
@endsection

@extends('main.kegiatanpenunjang.mainpengurusantransportasi')

@section('container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <?php
            $tgl = \Carbon\Carbon::now()->format('M');
            $tgl = str_replace('Jan', 'Januari', $tgl);
            $tgl = str_replace('Feb', 'Februari', $tgl);
            $tgl = str_replace('Mar', 'Maret', $tgl);
            $tgl = str_replace('Apr', 'April', $tgl);
            $tgl = str_replace('May', 'Mei', $tgl);
            $tgl = str_replace('Jun', 'Juni', $tgl);
            $tgl = str_replace('Jul', 'Juli', $tgl);
            $tgl = str_replace('Aug', 'Agustus', $tgl);
            $tgl = str_replace('Sep', 'September', $tgl);
            $tgl = str_replace('Oct', 'Oktober', $tgl);
            $tgl = str_replace('Nov', 'November', $tgl);
            $tgl = str_replace('Dec', 'Desember', $tgl);
        ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{count($pengurusan)}}</h3>

                                <p>Data Pengurusan Transportasi</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">Bulan : {{$tgl}} <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{count($suratMasuk)}}</h3>

                                <p>Surat Masuk</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{count($suratKeluar)}}</h3>

                                <p>Surat Keluar</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- /. row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BAR CHART -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Pengurusan Transportasi</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                </div>
                <!-- /. row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
