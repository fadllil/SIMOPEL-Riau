<html>
<head>
    <title>Simopel-Riau | Penjualan Pas Masuk</title>
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
    th{
        font-size: 8px;
        text-align: center;
    }
    td{
        text-align: left;
        font-size: 8px;
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
    <h5>Pnnjualan Pas Masuk</h5>
    <h6>Dinas Perhubungan Provinsi Riau</h6>
</center>

<p>Nama Pelabuhan : {{$user->nama_penyeberangan}}</p>
<?php
$tgl = \Carbon\Carbon::parse($penjualan_list->tanggal)->format('D');
$tgl = str_replace('Sun', 'Minggu', $tgl);
$tgl = str_replace('Mon', 'Senin', $tgl);
$tgl = str_replace('Tue', 'Selasa', $tgl);
$tgl = str_replace('Wed', 'Rabu', $tgl);
$tgl = str_replace('Thu', 'Kamis', $tgl);
$tgl = str_replace('Fri', 'Jumat', $tgl);
$tgl = str_replace('Sat', 'Sabtu', $tgl);
?>

<p>Hari : {{$tgl}}</p>
<p>Tanggal : {{\Carbon\Carbon::parse($penjualan_list->tanggal)->format('d/M/Y')}}</p>

<table class="table table-bordered">
    <thead>
    <tr>
        <th style="width: 10px" rowspan="2">No</th>
        <th rowspan="2">Jenis Tiket</th>
        <th rowspan="2">Warna</th>
        <th colspan="2">Nomor Seri</th>
        <th rowspan="2">Jumlah Lembar</th>
        <th rowspan="2">Harga (Rp)</th>
        <th rowspan="2">Total (Rp)</th>
    </tr>
    <tr>
        <th>Dari Nomor</th>
        <th>S/D Nomor</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Penumpang/Pengantar</td>
        <td>{{$penumpang[0]}}</td>
        <td>{{$penumpang[1]}}</td>
        <td>{{$penumpang[2]}}</td>
        <td>{{$penumpang[3]}}</td>
        <td>Rp 2.000</td>
        @if(count($penumpang) != 0)
            <td>Rp {{$penumpang[3] * 2000}}</td>
        @else
            <td></td>
        @endif
    </tr>
    <tr>
        <td>2</td>
        <td>Golongan I</td>
        <td>{{$gol1[0]}}</td>
        <td>{{$gol1[1]}}</td>
        <td>{{$gol1[2]}}</td>
        <td>{{$gol1[3]}}</td>
        <td>Rp 2.500</td>
        @if(count($gol1) != 0)
            <td>Rp {{$gol1[3] * 2500}}</td>
        @else
            <td></td>
        @endif
    </tr>
    <tr>
        <td>3</td>
        <td>Golongan II</td>
        <td>{{$gol2[0]}}</td>
        <td>{{$gol2[1]}}</td>
        <td>{{$gol2[2]}}</td>
        <td>{{$gol2[3]}}</td>
        <td>Rp 3.500</td>
        @if(count($gol2) != 0)
            <td>Rp {{$gol2[3] * 3500}}</td>
        @else
            <td></td>
        @endif
    </tr>
    <tr>
        <td>4</td>
        <td>Golongan III</td>
        <td>{{$gol3[0]}}</td>
        <td>{{$gol3[1]}}</td>
        <td>{{$gol3[2]}}</td>
        <td>{{$gol3[3]}}</td>
        <td>Rp 4.500</td>
        @if(count($gol3) != 0)
            <td>Rp {{$gol3[3] * 4500}}</td>
        @else
            <td></td>
        @endif
    </tr>
    <tr>
        <td>5</td>
        <td>Golongan IV</td>
        <td>{{$gol4[0]}}</td>
        <td>{{$gol4[1]}}</td>
        <td>{{$gol4[2]}}</td>
        <td>{{$gol4[3]}}</td>
        <td>Rp 5.000</td>
        @if(count($gol4) != 0)
            <td>Rp {{$gol4[3] * 5000}}</td>
        @else
            <td></td>
        @endif
    </tr>
    <tr>
        <td>6</td>
        <td>Golongan V</td>
        <td>{{$gol5[0]}}</td>
        <td>{{$gol5[1]}}</td>
        <td>{{$gol5[2]}}</td>
        <td>{{$gol5[3]}}</td>
        <td>Rp 5.500</td>
        @if(count($gol5) != 0)
            <td>Rp {{$gol5[3] * 5000}}</td>
        @else
            <td></td>
        @endif
    </tr>
    <tr>
        <td>7</td>
        <td>Golongan VI</td>
        <td>{{$gol6[0]}}</td>
        <td>{{$gol6[1]}}</td>
        <td>{{$gol6[2]}}</td>
        <td>{{$gol6[3]}}</td>
        <td>Rp 10.000</td>
        @if(count($gol6) != 0)
            <td>Rp {{$gol6[3] * 10000}}</td>
        @else
            <td></td>
        @endif
    </tr>
    <tr>
        <td>8</td>
        <td>Golongan VII</td>
        <td>{{$gol7[0]}}</td>
        <td>{{$gol7[1]}}</td>
        <td>{{$gol7[2]}}</td>
        <td>{{$gol7[3]}}</td>
        <td>Rp 45.500</td>
        @if(count($gol7) != 0)
            <td>Rp {{$gol7[3] * 45500}}</td>
        @else
            <td></td>
        @endif
    </tr>
    <tr>
        <td>9</td>
        <td>Golongan VIII</td>
        <td>{{$gol8[0]}}</td>
        <td>{{$gol8[1]}}</td>
        <td>{{$gol8[2]}}</td>
        <td>{{$gol8[3]}}</td>
        <td>Rp 75.000</td>
        @if(count($gol8) != 0)
            <td>Rp {{$gol8[3] * 75000}}</td>
        @else
            <td></td>
        @endif
    </tr>
    </tbody>
</table>
</body>
</html>
