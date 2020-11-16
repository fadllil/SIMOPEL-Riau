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
    <h5>Laporan Tahunan Operasional Pelabuhan</h5>
    <h6>Dinas Perhubungan Provinsi Riau</h6>
</center>

<p>Nama Pelabuhan : {{$user->nama_pelabuhan}}</p>
<p>Bulan/Tahun : {{\Carbon\Carbon::parse($tgl)->format('Y')}}</p>

<table class='table table-bordered'>
    <thead>
    <tr>
        <th style="width: 10px" >No</th>
        <th>Bulan</th>
        <th>Jumlah Operasinal</th>
        <th>Jumlah GT</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Januari</td>
        <td>{{count($data[0])}}</td>
        <td>{{$gt[0]}}</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Februari</td>
        <td>{{count($data[1])}}</td>
        <td>{{$gt[1]}}</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Maret</td>
        <td>{{count($data[2])}}</td>
        <td>{{$gt[2]}}</td>
    </tr>
    <tr>
        <td>4</td>
        <td>April</td>
        <td>{{count($data[3])}}</td>
        <td>{{$gt[3]}}</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Mei</td>
        <td>{{count($data[4])}}</td>
        <td>{{$gt[4]}}</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Juni</td>
        <td>{{count($data[5])}}</td>
        <td>{{$gt[5]}}</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Juli</td>
        <td>{{count($data[6])}}</td>
        <td>{{$gt[6]}}</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Agustus</td>
        <td>{{count($data[7])}}</td>
        <td>{{$gt[7]}}</td>
    </tr>
    <tr>
        <td>9</td>
        <td>September</td>
        <td>{{count($data[8])}}</td>
        <td>{{$gt[8]}}</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Oktober</td>
        <td>{{count($data[9])}}</td>
        <td>{{$gt[9]}}</td>
    </tr>
    <tr>
        <td>11</td>
        <td>November</td>
        <td>{{count($data[10])}}</td>
        <td>{{$gt[10]}}</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Desember</td>
        <td>{{count($data[11])}}</td>
        <td>{{$gt[11]}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
