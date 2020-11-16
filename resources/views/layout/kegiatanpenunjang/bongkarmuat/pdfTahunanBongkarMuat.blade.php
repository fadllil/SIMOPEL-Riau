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
    <h5>Laporan Tahunan Bongkar Muat Kegiatan Penunjang</h5>
    <h6>Dinas Perhubungan Provinsi Riau</h6>
</center>

<p>Nama Pelabuhan : {{$user->nama_perusahaan}}</p>
<p>Bulan/Tahun : {{\Carbon\Carbon::parse($tgl)->format('Y')}}</p>

<table class='table table-bordered'>
    <thead>
    <tr>
        <th style="width: 10px" >No</th>
        <th>Bulan</th>
        <th>Jumlah Bongkar Muat</th>
        <th>Jumlah B/M</th>
        <th>Jumlah Buruh</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Januari</td>
        <td>{{count($data[0])}}</td>
        <td>{{$JumlahBM[0]}}</td>
        <td>{{$JumlahBuruh[0]}}</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Februari</td>
        <td>{{count($data[1])}}</td>
        <td>{{$JumlahBM[1]}}</td>
        <td>{{$JumlahBuruh[1]}}</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Maret</td>
        <td>{{count($data[2])}}</td>
        <td>{{$JumlahBM[2]}}</td>
        <td>{{$JumlahBuruh[2]}}</td>
    </tr>
    <tr>
        <td>4</td>
        <td>April</td>
        <td>{{count($data[3])}}</td>
        <td>{{$JumlahBM[3]}}</td>
        <td>{{$JumlahBuruh[3]}}</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Mei</td>
        <td>{{count($data[4])}}</td>
        <td>{{$JumlahBM[4]}}</td>
        <td>{{$JumlahBuruh[4]}}</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Juni</td>
        <td>{{count($data[5])}}</td>
        <td>{{$JumlahBM[5]}}</td>
        <td>{{$JumlahBuruh[5]}}</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Juli</td>
        <td>{{count($data[6])}}</td>
        <td>{{$JumlahBM[6]}}</td>
        <td>{{$JumlahBuruh[6]}}</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Agustus</td>
        <td>{{count($data[7])}}</td>
        <td>{{$JumlahBM[7]}}</td>
        <td>{{$JumlahBuruh[7]}}</td>
    </tr>
    <tr>
        <td>9</td>
        <td>September</td>
        <td>{{count($data[8])}}</td>
        <td>{{$JumlahBM[8]}}</td>
        <td>{{$JumlahBuruh[8]}}</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Oktober</td>
        <td>{{count($data[9])}}</td>
        <td>{{$JumlahBM[9]}}</td>
        <td>{{$JumlahBuruh[9]}}</td>
    </tr>
    <tr>
        <td>11</td>
        <td>November</td>
        <td>{{count($data[10])}}</td>
        <td>{{$JumlahBM[10]}}</td>
        <td>{{$JumlahBuruh[10]}}</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Desember</td>
        <td>{{count($data[11])}}</td>
        <td>{{$JumlahBM[11]}}</td>
        <td>{{$JumlahBuruh[11]}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
