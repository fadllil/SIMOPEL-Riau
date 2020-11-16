<html>
<head>
    <title>Simopel-Riau | Pajak Dan Retribusi Daerah</title>
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
    <h5>Pajak Dan Retribusi Daerah</h5>
    <h6>Dinas Perhubungan Provinsi Riau</h6>
</center>

<p>Nama Pelabuhan : {{$user->nama_pelabuhan}}</p>
<?php
$tgl = \Carbon\Carbon::parse($pajak_list->tgl)->format('D');
$tgl = str_replace('Sun', 'Minggu', $tgl);
$tgl = str_replace('Mon', 'Senin', $tgl);
$tgl = str_replace('Tue', 'Selasa', $tgl);
$tgl = str_replace('Wed', 'Rabu', $tgl);
$tgl = str_replace('Thu', 'Kamis', $tgl);
$tgl = str_replace('Fri', 'Jumat', $tgl);
$tgl = str_replace('Sat', 'Sabtu', $tgl);
?>

<p>Hari : {{$tgl}}</p>
<p>Tanggal : {{\Carbon\Carbon::parse($pajak_list->tgl)->format('d/M/Y')}}</p>

<table class="table table-bordered">
    <thead>
    <tr>
        <th style="width: 10px">No</th>
        <th colspan="2">Jenis Jasa</th>
        <th>Jumlah</th>
        <th>Satuan</th>
        <th>Biaya (Rp)</th>
        <th>Jumlah (Rp)</th>
        <th>Keterangan</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td colspan="2">Labuh Kapal</td>
        <td>{{$labuh_kapal[0]}}</td>
        <td>GT</td>
        <td>{{$labuh_kapal[1]}}</td>
        @if($labuh_kapal[0] != '' && $labuh_kapal[1] != '')
            <td>{{$labuh_kapal[0] * $labuh_kapal[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$labuh_kapal[2]}}</td>
    </tr>
    <tr>
        <td>2</td>
        <td colspan="2">Tambat / Sandar Kapal</td>
        <td>{{$tambat[0]}}</td>
        <td>GT</td>
        <td>{{$tambat[1]}}</td>
        @if($tambat[0] != '' && $tambat[1] != '')
            <td>{{$tambat[0] * $tambat[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$tambat[2]}}</td>
    </tr>
    <tr>
        <td rowspan="3">3</td>
        <td colspan="2">Dermaga</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td style="width: 10px">a.</td>
        <td>Barang</td>
        <td>{{$barang[0]}}</td>
        <td>TON/M3</td>
        <td>{{$barang[1]}}</td>
        @if($barang[0] != '' && $barang[1] != '')
            <td>{{$barang[0] * $barang[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$barang[2]}}</td>
    </tr>
    <tr>
        <td style="width: 10px">b.</td>
        <td>Hewan</td>
        <td>{{$hewan[0]}}</td>
        <td>EKOR</td>
        <td>{{$hewan[1]}}</td>
        @if($hewan[0] != '' && $hewan[1] != '')
            <td>{{$hewan[0] * $hewan[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$hewan[2]}}</td>
    </tr>
    <tr>
        <td rowspan="4">4</td>
        <td colspan="2">Penumpukan</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td style="width: 10px">a.</td>
        <td>Gudang</td>
        <td>{{$gudang[0]}}</td>
        <td>TON/M3</td>
        <td>{{$gudang[1]}}</td>
        @if($gudang[0] != '' && $gudang[1] != '')
            <td>{{$gudang[0] * $gudang[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$gudang[2]}}</td>
    </tr>
    <tr>
        <td style="width: 10px">b.</td>
        <td>Lapangan</td>
        <td>{{$lapangan[0]}}</td>
        <td>HARI</td>
        <td>{{$lapangan[1]}}</td>
        @if($lapangan[0] != '' && $lapangan[1] != '')
            <td>{{$lapangan[0] * $lapangan[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$lapangan[2]}}</td>
    </tr>
    <tr>
        <td style="width: 10px">c.</td>
        <td>Penyimpanan</td>
        <td>{{$penyimpanan[0]}}</td>
        <td>HARI</td>
        <td>{{$penyimpanan[1]}}</td>
        @if($penyimpanan[0] != '' && $penyimpanan[1] != '')
            <td>{{$penyimpanan[0] * $penyimpanan[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$penyimpanan[2]}}</td>
    </tr>
    <tr>
        <td>5</td>
        <td colspan="2">Pas Penumpang</td>
        <td>{{$pas_penumpang[0]}}</td>
        <td>Orang</td>
        <td>{{$pas_penumpang[1]}}</td>
        @if($pas_penumpang[0] != '' && $pas_penumpang[1] != '')
            <td>{{$pas_penumpang[0] * $pas_penumpang[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$pas_penumpang[2]}}</td>
    </tr>
    <tr>
        <td rowspan="9">6</td>
        <td colspan="2">Pas Kendaraan</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td style="width: 10px">a.</td>
        <td>Golongan I (Sepeda)</td>
        <td>{{$gol1[0]}}</td>
        <td>Kendaraan</td>
        <td>{{$gol1[1]}}</td>
        @if($gol1[0] != '' && $gol1[1] != '')
            <td>{{$gol1[0] * $gol1[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$gol1[2]}}</td>
    </tr>
    <tr>
        <td style="width: 10px">b.</td>
        <td>Golongan II (Sepeda Motor)</td>
        <td>{{$gol2[0]}}</td>
        <td>Kendaraan</td>
        <td>{{$gol2[1]}}</td>
        @if($gol2[0] != '' && $gol2[1] != '')
            <td>{{$gol2[0] * $gol2[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$gol2[2]}}</td>
    </tr>
    <tr>
        <td style="width: 10px">c.</td>
        <td>Golongan III (Roda 3)</td>
        <td>{{$gol3[0]}}</td>
        <td>Kendaraan</td>
        <td>{{$gol3[1]}}</td>
        @if($gol3[0] != '' && $gol3[1] != '')
            <td>{{$gol3[0] * $gol3[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$gol3[2]}}</td>
    </tr>
    <tr>
        <td style="width: 10px">d.</td>
        <td>Golongan IV (Roda 4)</td>
        <td>{{$gol4[0]}}</td>
        <td>Kendaraan</td>
        <td>{{$gol4[1]}}</td>
        @if($gol4[0] != '' && $gol4[1] != '')
            <td>{{$gol4[0] * $gol4[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$gol4[2]}}</td>
    </tr>
    <tr>
        <td style="width: 10px">e.</td>
        <td>Golongan V (Truk Sedang Roda 6)</td>
        <td>{{$gol5[0]}}</td>
        <td>Kendaraan</td>
        <td>{{$gol5[1]}}</td>
        @if($gol5[0] != '' && $gol5[1] != '')
            <td>{{$gol5[0] * $gol5[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$gol5[2]}}</td>
    </tr>
    <tr>
        <td style="width: 10px">f.</td>
        <td>Golongan VI (Truk Besar Roda 8)</td>
        <td>{{$gol6[0]}}</td>
        <td>Kendaraan</td>
        <td>{{$gol6[1]}}</td>
        @if($gol6[0] != '' && $gol6[1] != '')
            <td>{{$gol6[0] * $gol6[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$gol6[2]}}</td>
    </tr>
    <tr>
        <td style="width: 10px">g.</td>
        <td>Golongan VII (Truk Besar Roda 8)</td>
        <td>{{$gol7[0]}}</td>
        <td>Kendaraan</td>
        <td>{{$gol7[1]}}</td>
        @if($gol7[0] != '' && $gol7[1] != '')
            <td>{{$gol7[0] * $gol7[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$gol7[2]}}</td>
    </tr>
    <tr>
        <td style="width: 10px">h.</td>
        <td>Golongan VIII (Truk Besar Roda 8)</td>
        <td>{{$gol8[0]}}</td>
        <td>Kendaraan</td>
        <td>{{$gol8[1]}}</td>
        @if($gol8[0] != '' && $gol8[1] != '')
            <td>{{$gol8[0] * $gol8[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$gol8[2]}}</td>
    </tr>
    <tr>
        <td>7</td>
        <td colspan="2">Fasilitas Papan Reklame</td>
        <td>{{$papan_reklame[0]}}</td>
        <td>MD/Bulan</td>
        <td>{{$papan_reklame[1]}}</td>
        @if($papan_reklame[0] != '' && $papan_reklame[1] != '')
            <td>{{$papan_reklame[0] * $papan_reklame[1]}}</td>
        @else
            <td></td>
        @endif
        <td>{{$papan_reklame[2]}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
