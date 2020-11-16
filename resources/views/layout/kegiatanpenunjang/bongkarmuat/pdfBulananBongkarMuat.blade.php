<html>
<head>
    <title>Simopel-Riau | Laporan Bulanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
    html {
        margin-left: 20px;
        margin-right: 20px;
        margin-top: 30px;
        margin-bottom: 20px;
    }
    table tr td,
    table tr th{
        font-size: 7px;
        text-align: center;
    }
    table tr td{
        font-size: 7px;
    }
    p{
        font-size: 10px;
    }
    h5{
        font-size: 14px;
    }
    h6{
        font-size: 12px;
    }
</style>
<center>
    <h5>Laporan Bulanan Bongkar Muat Kegiatan Penunjang</h5>
        <h6>Dinas Perhubungan Provinsi Riau</h6>
</center>

<p>Nama Pelabuhan : {{$user->nama_perusahaan}}</p>
<p>Bulan/Tahun : {{\Carbon\Carbon::parse($tgl)->format('M/Y')}}</p>

<table class='table table-bordered'>
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
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
