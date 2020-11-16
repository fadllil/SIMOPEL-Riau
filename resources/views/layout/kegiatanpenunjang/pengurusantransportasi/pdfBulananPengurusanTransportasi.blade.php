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
    <h5>Laporan Bulanan Pengurusan Transportasi Kegiatan Penunjang</h5>
    <h6>Dinas Perhubungan Provinsi Riau</h6>
</center>

<p>Nama Pelabuhan : {{$user->nama_perusahaan}}</p>
<p>Bulan/Tahun : {{\Carbon\Carbon::parse($tgl)->format('M/Y')}}</p>

<table class='table table-bordered'>
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
    foreach ($pengurusan_list as $pengurusantransportasi):
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
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
