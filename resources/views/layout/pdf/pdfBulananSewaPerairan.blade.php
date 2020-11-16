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
    <h5>Laporan Bulanan Sewa Perairan</h5>
        <h6>Dinas Perhubungan Provinsi Riau</h6>
</center>

<p>Nama Pelabuhan : {{$user->nama_perusahaan}}</p>
<p>Bulan/Tahun : {{\Carbon\Carbon::parse($tgl)->format('M/Y')}}</p>

<table class='table table-bordered'>
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
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
