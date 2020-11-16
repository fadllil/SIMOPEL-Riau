<html>
<head>
    <title>Simopel-Riau | Laporan Tahunan</title>
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
        font-size: 8px;
        text-align: center;
    }
    table tr td{
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
    <h5>Laporan Tahunan Pengurusan Transportasi Kegiatan Penunjang</h5>
    <h6>Dinas Perhubungan Provinsi Riau</h6>
</center>

<p>Nama Pelabuhan : {{$user->nama_perusahaan}}</p>
<p>Bulan/Tahun : {{\Carbon\Carbon::parse($tgl)->format('Y')}}</p>

<table class='table table-bordered'>
    <thead>
    <tr>
        <th style="width: 10px" rowspan="3" >No</th>
        <th rowspan="3">Bulan</th>
        <th rowspan="3">Jumlah Pengurusan Transportasi</th>
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
    <tr>
        <td>1</td>
        <td>Januari</td>
        <td>{{count($data[0])}}</td>
        <td>{{$JumlahImTonase[0]}}</td>
        <td>{{$JumlahImPIB[0]}}</td>
        <td>{{$JumlahImAPTonase[0]}}</td>
        <td>{{$JumlahImAPPMB[0]}}</td>
        <td>{{$JumlahEksTonase[0]}}</td>
        <td>{{$JumlahEksPEB[0]}}</td>
        <td>{{$JumlahEksAPTonase[0]}}</td>
        <td>{{$JumlahEksAPPMB[0]}}</td>
        <td>{{$JumlahTonase[0]}}</td>
        <td>{{$JumlahInUit[0]}}</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Februari</td>
        <td>{{count($data[1])}}</td>
        <td>{{$JumlahImTonase[1]}}</td>
        <td>{{$JumlahImPIB[1]}}</td>
        <td>{{$JumlahImAPTonase[1]}}</td>
        <td>{{$JumlahImAPPMB[1]}}</td>
        <td>{{$JumlahEksTonase[1]}}</td>
        <td>{{$JumlahEksPEB[1]}}</td>
        <td>{{$JumlahEksAPTonase[1]}}</td>
        <td>{{$JumlahEksAPPMB[1]}}</td>
        <td>{{$JumlahTonase[1]}}</td>
        <td>{{$JumlahInUit[1]}}</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Maret</td>
        <td>{{count($data[2])}}</td>
        <td>{{$JumlahImTonase[2]}}</td>
        <td>{{$JumlahImPIB[2]}}</td>
        <td>{{$JumlahImAPTonase[2]}}</td>
        <td>{{$JumlahImAPPMB[2]}}</td>
        <td>{{$JumlahEksTonase[2]}}</td>
        <td>{{$JumlahEksPEB[2]}}</td>
        <td>{{$JumlahEksAPTonase[2]}}</td>
        <td>{{$JumlahEksAPPMB[2]}}</td>
        <td>{{$JumlahTonase[2]}}</td>
        <td>{{$JumlahInUit[2]}}</td>
    </tr>
    <tr>
        <td>4</td>
        <td>April</td>
        <td>{{count($data[3])}}</td>
        <td>{{$JumlahImTonase[3]}}</td>
        <td>{{$JumlahImPIB[3]}}</td>
        <td>{{$JumlahImAPTonase[3]}}</td>
        <td>{{$JumlahImAPPMB[3]}}</td>
        <td>{{$JumlahEksTonase[3]}}</td>
        <td>{{$JumlahEksPEB[3]}}</td>
        <td>{{$JumlahEksAPTonase[3]}}</td>
        <td>{{$JumlahEksAPPMB[3]}}</td>
        <td>{{$JumlahTonase[3]}}</td>
        <td>{{$JumlahInUit[3]}}</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Mei</td>
        <td>{{count($data[4])}}</td>
        <td>{{$JumlahImTonase[4]}}</td>
        <td>{{$JumlahImPIB[4]}}</td>
        <td>{{$JumlahImAPTonase[4]}}</td>
        <td>{{$JumlahImAPPMB[4]}}</td>
        <td>{{$JumlahEksTonase[4]}}</td>
        <td>{{$JumlahEksPEB[4]}}</td>
        <td>{{$JumlahEksAPTonase[4]}}</td>
        <td>{{$JumlahEksAPPMB[4]}}</td>
        <td>{{$JumlahTonase[4]}}</td>
        <td>{{$JumlahInUit[4]}}</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Juni</td>
        <td>{{count($data[5])}}</td>
        <td>{{$JumlahImTonase[5]}}</td>
        <td>{{$JumlahImPIB[5]}}</td>
        <td>{{$JumlahImAPTonase[5]}}</td>
        <td>{{$JumlahImAPPMB[5]}}</td>
        <td>{{$JumlahEksTonase[5]}}</td>
        <td>{{$JumlahEksPEB[5]}}</td>
        <td>{{$JumlahEksAPTonase[5]}}</td>
        <td>{{$JumlahEksAPPMB[5]}}</td>
        <td>{{$JumlahTonase[5]}}</td>
        <td>{{$JumlahInUit[5]}}</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Juli</td>
        <td>{{count($data[6])}}</td>
        <td>{{$JumlahImTonase[6]}}</td>
        <td>{{$JumlahImPIB[6]}}</td>
        <td>{{$JumlahImAPTonase[6]}}</td>
        <td>{{$JumlahImAPPMB[6]}}</td>
        <td>{{$JumlahEksTonase[6]}}</td>
        <td>{{$JumlahEksPEB[6]}}</td>
        <td>{{$JumlahEksAPTonase[6]}}</td>
        <td>{{$JumlahEksAPPMB[6]}}</td>
        <td>{{$JumlahTonase[6]}}</td>
        <td>{{$JumlahInUit[6]}}</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Agustus</td>
        <td>{{count($data[7])}}</td>
        <td>{{$JumlahImTonase[7]}}</td>
        <td>{{$JumlahImPIB[7]}}</td>
        <td>{{$JumlahImAPTonase[7]}}</td>
        <td>{{$JumlahImAPPMB[7]}}</td>
        <td>{{$JumlahEksTonase[7]}}</td>
        <td>{{$JumlahEksPEB[7]}}</td>
        <td>{{$JumlahEksAPTonase[7]}}</td>
        <td>{{$JumlahEksAPPMB[7]}}</td>
        <td>{{$JumlahTonase[7]}}</td>
        <td>{{$JumlahInUit[7]}}</td>
    </tr>
    <tr>
        <td>9</td>
        <td>September</td>
        <td>{{count($data[8])}}</td>
        <td>{{$JumlahImTonase[8]}}</td>
        <td>{{$JumlahImPIB[8]}}</td>
        <td>{{$JumlahImAPTonase[8]}}</td>
        <td>{{$JumlahImAPPMB[8]}}</td>
        <td>{{$JumlahEksTonase[8]}}</td>
        <td>{{$JumlahEksPEB[8]}}</td>
        <td>{{$JumlahEksAPTonase[8]}}</td>
        <td>{{$JumlahEksAPPMB[8]}}</td>
        <td>{{$JumlahTonase[8]}}</td>
        <td>{{$JumlahInUit[8]}}</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Oktober</td>
        <td>{{count($data[9])}}</td>
        <td>{{$JumlahImTonase[9]}}</td>
        <td>{{$JumlahImPIB[9]}}</td>
        <td>{{$JumlahImAPTonase[9]}}</td>
        <td>{{$JumlahImAPPMB[9]}}</td>
        <td>{{$JumlahEksTonase[9]}}</td>
        <td>{{$JumlahEksPEB[9]}}</td>
        <td>{{$JumlahEksAPTonase[9]}}</td>
        <td>{{$JumlahEksAPPMB[9]}}</td>
        <td>{{$JumlahTonase[9]}}</td>
        <td>{{$JumlahInUit[9]}}</td>
    </tr>
    <tr>
        <td>11</td>
        <td>November</td>
        <td>{{count($data[10])}}</td>
        <td>{{$JumlahImTonase[10]}}</td>
        <td>{{$JumlahImPIB[10]}}</td>
        <td>{{$JumlahImAPTonase[10]}}</td>
        <td>{{$JumlahImAPPMB[10]}}</td>
        <td>{{$JumlahEksTonase[10]}}</td>
        <td>{{$JumlahEksPEB[10]}}</td>
        <td>{{$JumlahEksAPTonase[10]}}</td>
        <td>{{$JumlahEksAPPMB[10]}}</td>
        <td>{{$JumlahTonase[10]}}</td>
        <td>{{$JumlahInUit[10]}}</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Desember</td>
        <td>{{count($data[11])}}</td>
        <td>{{$JumlahImTonase[11]}}</td>
        <td>{{$JumlahImPIB[11]}}</td>
        <td>{{$JumlahImAPTonase[11]}}</td>
        <td>{{$JumlahImAPPMB[11]}}</td>
        <td>{{$JumlahEksTonase[11]}}</td>
        <td>{{$JumlahEksPEB[11]}}</td>
        <td>{{$JumlahEksAPTonase[11]}}</td>
        <td>{{$JumlahEksAPPMB[11]}}</td>
        <td>{{$JumlahTonase[11]}}</td>
        <td>{{$JumlahInUit[11]}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
