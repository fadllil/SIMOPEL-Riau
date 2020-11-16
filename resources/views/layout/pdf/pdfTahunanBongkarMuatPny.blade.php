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
    <h5>Laporan Tahunan Bongkar Muat Pelabuhan</h5>
    <h6>Dinas Perhubungan Provinsi Riau</h6>
</center>

<p>Nama Pelabuhan : {{$user->nama_pelabuhan}}</p>
<p>Tahun : {{\Carbon\Carbon::parse($tgl)->format('Y')}}</p>

<table class='table table-bordered'>
    <thead>
    <tr>
        <th style="width: 10px" rowspan="5">No</th>
        <th rowspan="5">Bulan</th>
        <th rowspan="5">Jumlah Bongkar Muat</th>
        <th colspan="16">Angkutan Dalam Negeri</th>
        <th colspan="16">Angkutan Luar Negeri</th>
    </tr>
    <tr>
        <th colspan="8">Bongkar</th>
        <th colspan="8">Muat</th>
        <th colspan="8">Bongkar</th>
        <th colspan="8">Muat</th>
    </tr>
    <tr>
        <th colspan="8">Dalam Negeri (Antar Pulau)</th>
        <th colspan="8">Dalam Negeri (Antar Pulau)</th>
        <th colspan="8">Import</th>
        <th colspan="8">Export</th>
    </tr>
    <tr>
        <th rowspan="2">Penumpang Turun (Orang)</th>
        <th colspan="7">Jenis Muatan</th>
        <th rowspan="2">Penumpang Naik (Orang)</th>
        <th colspan="7">Jenis Muatan</th>
        <th rowspan="2">Penumpang Turun (Orang)</th>
        <th colspan="7">Jenis Muatan</th>
        <th rowspan="2">Penumpang Naik (Orang)</th>
        <th colspan="7">Jenis Muatan</th>
    </tr>
    <tr>
        <th>Gol I</th>
        <th>Gol II</th>
        <th>Gol III</th>
        <th>Gol IV</th>
        <th>Gol V</th>
        <th>Gol VI</th>
        <th>Gol VII</th>
        <th>Gol I</th>
        <th>Gol II</th>
        <th>Gol III</th>
        <th>Gol IV</th>
        <th>Gol V</th>
        <th>Gol VI</th>
        <th>Gol VII</th>
        <th>Gol I</th>
        <th>Gol II</th>
        <th>Gol III</th>
        <th>Gol IV</th>
        <th>Gol V</th>
        <th>Gol VI</th>
        <th>Gol VII</th>
        <th>Gol I</th>
        <th>Gol II</th>
        <th>Gol III</th>
        <th>Gol IV</th>
        <th>Gol V</th>
        <th>Gol VI</th>
        <th>Gol VII</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Januari</td>
        <td>{{count($data[0])}}</td>
        <td>{{$PTDN[0]}}</td>
        <td>{{$Gol1TDN[0]}}</td>
        <td>{{$Gol2TDN[0]}}</td>
        <td>{{$Gol3TDN[0]}}</td>
        <td>{{$Gol4TDN[0]}}</td>
        <td>{{$Gol5TDN[0]}}</td>
        <td>{{$Gol6TDN[0]}}</td>
        <td>{{$Gol7TDN[0]}}</td>
        <td>{{$PMDN[0]}}</td>
        <td>{{$Gol1MDN[0]}}</td>
        <td>{{$Gol2MDN[0]}}</td>
        <td>{{$Gol3MDN[0]}}</td>
        <td>{{$Gol4MDN[0]}}</td>
        <td>{{$Gol5MDN[0]}}</td>
        <td>{{$Gol6MDN[0]}}</td>
        <td>{{$Gol7MDN[0]}}</td>
        <td>{{$PTLN[0]}}</td>
        <td>{{$Gol1TLN[0]}}</td>
        <td>{{$Gol2TLN[0]}}</td>
        <td>{{$Gol3TLN[0]}}</td>
        <td>{{$Gol4TLN[0]}}</td>
        <td>{{$Gol5TLN[0]}}</td>
        <td>{{$Gol6TLN[0]}}</td>
        <td>{{$Gol7TLN[0]}}</td>
        <td>{{$PMLN[0]}}</td>
        <td>{{$Gol1MLN[0]}}</td>
        <td>{{$Gol2MLN[0]}}</td>
        <td>{{$Gol3MLN[0]}}</td>
        <td>{{$Gol4MLN[0]}}</td>
        <td>{{$Gol5MLN[0]}}</td>
        <td>{{$Gol6MLN[0]}}</td>
        <td>{{$Gol7MLN[0]}}</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Februari</td>
        <td>{{count($data[1])}}</td>
        <td>{{$PTDN[1]}}</td>
        <td>{{$Gol1TDN[1]}}</td>
        <td>{{$Gol2TDN[1]}}</td>
        <td>{{$Gol3TDN[1]}}</td>
        <td>{{$Gol4TDN[1]}}</td>
        <td>{{$Gol5TDN[1]}}</td>
        <td>{{$Gol6TDN[1]}}</td>
        <td>{{$Gol7TDN[1]}}</td>
        <td>{{$PMDN[1]}}</td>
        <td>{{$Gol1MDN[1]}}</td>
        <td>{{$Gol2MDN[1]}}</td>
        <td>{{$Gol3MDN[1]}}</td>
        <td>{{$Gol4MDN[1]}}</td>
        <td>{{$Gol5MDN[1]}}</td>
        <td>{{$Gol6MDN[1]}}</td>
        <td>{{$Gol7MDN[1]}}</td>
        <td>{{$PTLN[1]}}</td>
        <td>{{$Gol1TLN[1]}}</td>
        <td>{{$Gol2TLN[1]}}</td>
        <td>{{$Gol3TLN[1]}}</td>
        <td>{{$Gol4TLN[1]}}</td>
        <td>{{$Gol5TLN[1]}}</td>
        <td>{{$Gol6TLN[1]}}</td>
        <td>{{$Gol7TLN[1]}}</td>
        <td>{{$PMLN[1]}}</td>
        <td>{{$Gol1MLN[1]}}</td>
        <td>{{$Gol2MLN[1]}}</td>
        <td>{{$Gol3MLN[1]}}</td>
        <td>{{$Gol4MLN[1]}}</td>
        <td>{{$Gol5MLN[1]}}</td>
        <td>{{$Gol6MLN[1]}}</td>
        <td>{{$Gol7MLN[1]}}</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Maret</td>
        <td>{{count($data[2])}}</td>
        <td>{{$PTDN[2]}}</td>
        <td>{{$Gol1TDN[2]}}</td>
        <td>{{$Gol2TDN[2]}}</td>
        <td>{{$Gol3TDN[2]}}</td>
        <td>{{$Gol4TDN[2]}}</td>
        <td>{{$Gol5TDN[2]}}</td>
        <td>{{$Gol6TDN[2]}}</td>
        <td>{{$Gol7TDN[2]}}</td>
        <td>{{$PMDN[2]}}</td>
        <td>{{$Gol1MDN[2]}}</td>
        <td>{{$Gol2MDN[2]}}</td>
        <td>{{$Gol3MDN[2]}}</td>
        <td>{{$Gol4MDN[2]}}</td>
        <td>{{$Gol5MDN[2]}}</td>
        <td>{{$Gol6MDN[2]}}</td>
        <td>{{$Gol7MDN[2]}}</td>
        <td>{{$PTLN[2]}}</td>
        <td>{{$Gol1TLN[2]}}</td>
        <td>{{$Gol2TLN[2]}}</td>
        <td>{{$Gol3TLN[2]}}</td>
        <td>{{$Gol4TLN[2]}}</td>
        <td>{{$Gol5TLN[2]}}</td>
        <td>{{$Gol6TLN[2]}}</td>
        <td>{{$Gol7TLN[2]}}</td>
        <td>{{$PMLN[2]}}</td>
        <td>{{$Gol1MLN[2]}}</td>
        <td>{{$Gol2MLN[2]}}</td>
        <td>{{$Gol3MLN[2]}}</td>
        <td>{{$Gol4MLN[2]}}</td>
        <td>{{$Gol5MLN[2]}}</td>
        <td>{{$Gol6MLN[2]}}</td>
        <td>{{$Gol7MLN[2]}}</td>
    </tr>
    <tr>
        <td>4</td>
        <td>April</td>
        <td>{{count($data[3])}}</td>
        <td>{{$PTDN[3]}}</td>
        <td>{{$Gol1TDN[3]}}</td>
        <td>{{$Gol2TDN[3]}}</td>
        <td>{{$Gol3TDN[3]}}</td>
        <td>{{$Gol4TDN[3]}}</td>
        <td>{{$Gol5TDN[3]}}</td>
        <td>{{$Gol6TDN[3]}}</td>
        <td>{{$Gol7TDN[3]}}</td>
        <td>{{$PMDN[3]}}</td>
        <td>{{$Gol1MDN[3]}}</td>
        <td>{{$Gol2MDN[3]}}</td>
        <td>{{$Gol3MDN[3]}}</td>
        <td>{{$Gol4MDN[3]}}</td>
        <td>{{$Gol5MDN[3]}}</td>
        <td>{{$Gol6MDN[3]}}</td>
        <td>{{$Gol7MDN[3]}}</td>
        <td>{{$PTLN[3]}}</td>
        <td>{{$Gol1TLN[3]}}</td>
        <td>{{$Gol2TLN[3]}}</td>
        <td>{{$Gol3TLN[3]}}</td>
        <td>{{$Gol4TLN[3]}}</td>
        <td>{{$Gol5TLN[3]}}</td>
        <td>{{$Gol6TLN[3]}}</td>
        <td>{{$Gol7TLN[3]}}</td>
        <td>{{$PMLN[3]}}</td>
        <td>{{$Gol1MLN[3]}}</td>
        <td>{{$Gol2MLN[3]}}</td>
        <td>{{$Gol3MLN[3]}}</td>
        <td>{{$Gol4MLN[3]}}</td>
        <td>{{$Gol5MLN[3]}}</td>
        <td>{{$Gol6MLN[3]}}</td>
        <td>{{$Gol7MLN[3]}}</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Mei</td>
        <td>{{count($data[4])}}</td>
        <td>{{$PTDN[4]}}</td>
        <td>{{$Gol1TDN[4]}}</td>
        <td>{{$Gol2TDN[4]}}</td>
        <td>{{$Gol3TDN[4]}}</td>
        <td>{{$Gol4TDN[4]}}</td>
        <td>{{$Gol5TDN[4]}}</td>
        <td>{{$Gol6TDN[4]}}</td>
        <td>{{$Gol7TDN[4]}}</td>
        <td>{{$PMDN[4]}}</td>
        <td>{{$Gol1MDN[4]}}</td>
        <td>{{$Gol2MDN[4]}}</td>
        <td>{{$Gol3MDN[4]}}</td>
        <td>{{$Gol4MDN[4]}}</td>
        <td>{{$Gol5MDN[4]}}</td>
        <td>{{$Gol6MDN[4]}}</td>
        <td>{{$Gol7MDN[4]}}</td>
        <td>{{$PTLN[4]}}</td>
        <td>{{$Gol1TLN[4]}}</td>
        <td>{{$Gol2TLN[4]}}</td>
        <td>{{$Gol3TLN[4]}}</td>
        <td>{{$Gol4TLN[4]}}</td>
        <td>{{$Gol5TLN[4]}}</td>
        <td>{{$Gol6TLN[4]}}</td>
        <td>{{$Gol7TLN[4]}}</td>
        <td>{{$PMLN[4]}}</td>
        <td>{{$Gol1MLN[4]}}</td>
        <td>{{$Gol2MLN[4]}}</td>
        <td>{{$Gol3MLN[4]}}</td>
        <td>{{$Gol4MLN[4]}}</td>
        <td>{{$Gol5MLN[4]}}</td>
        <td>{{$Gol6MLN[4]}}</td>
        <td>{{$Gol7MLN[4]}}</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Juni</td>
        <td>{{count($data[5])}}</td>
        <td>{{$PTDN[5]}}</td>
        <td>{{$Gol1TDN[5]}}</td>
        <td>{{$Gol2TDN[5]}}</td>
        <td>{{$Gol3TDN[5]}}</td>
        <td>{{$Gol4TDN[5]}}</td>
        <td>{{$Gol5TDN[5]}}</td>
        <td>{{$Gol6TDN[5]}}</td>
        <td>{{$Gol7TDN[5]}}</td>
        <td>{{$PMDN[5]}}</td>
        <td>{{$Gol1MDN[5]}}</td>
        <td>{{$Gol2MDN[5]}}</td>
        <td>{{$Gol3MDN[5]}}</td>
        <td>{{$Gol4MDN[5]}}</td>
        <td>{{$Gol5MDN[5]}}</td>
        <td>{{$Gol6MDN[5]}}</td>
        <td>{{$Gol7MDN[5]}}</td>
        <td>{{$PTLN[5]}}</td>
        <td>{{$Gol1TLN[5]}}</td>
        <td>{{$Gol2TLN[5]}}</td>
        <td>{{$Gol3TLN[5]}}</td>
        <td>{{$Gol4TLN[5]}}</td>
        <td>{{$Gol5TLN[5]}}</td>
        <td>{{$Gol6TLN[5]}}</td>
        <td>{{$Gol7TLN[5]}}</td>
        <td>{{$PMLN[5]}}</td>
        <td>{{$Gol1MLN[5]}}</td>
        <td>{{$Gol2MLN[5]}}</td>
        <td>{{$Gol3MLN[5]}}</td>
        <td>{{$Gol4MLN[5]}}</td>
        <td>{{$Gol5MLN[5]}}</td>
        <td>{{$Gol6MLN[5]}}</td>
        <td>{{$Gol7MLN[5]}}</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Juli</td>
        <td>{{count($data[6])}}</td>
        <td>{{$PTDN[6]}}</td>
        <td>{{$Gol1TDN[6]}}</td>
        <td>{{$Gol2TDN[6]}}</td>
        <td>{{$Gol3TDN[6]}}</td>
        <td>{{$Gol4TDN[6]}}</td>
        <td>{{$Gol5TDN[6]}}</td>
        <td>{{$Gol6TDN[6]}}</td>
        <td>{{$Gol7TDN[6]}}</td>
        <td>{{$PMDN[6]}}</td>
        <td>{{$Gol1MDN[6]}}</td>
        <td>{{$Gol2MDN[6]}}</td>
        <td>{{$Gol3MDN[6]}}</td>
        <td>{{$Gol4MDN[6]}}</td>
        <td>{{$Gol5MDN[6]}}</td>
        <td>{{$Gol6MDN[6]}}</td>
        <td>{{$Gol7MDN[6]}}</td>
        <td>{{$PTLN[6]}}</td>
        <td>{{$Gol1TLN[6]}}</td>
        <td>{{$Gol2TLN[6]}}</td>
        <td>{{$Gol3TLN[6]}}</td>
        <td>{{$Gol4TLN[6]}}</td>
        <td>{{$Gol5TLN[6]}}</td>
        <td>{{$Gol6TLN[6]}}</td>
        <td>{{$Gol7TLN[6]}}</td>
        <td>{{$PMLN[6]}}</td>
        <td>{{$Gol1MLN[6]}}</td>
        <td>{{$Gol2MLN[6]}}</td>
        <td>{{$Gol3MLN[6]}}</td>
        <td>{{$Gol4MLN[6]}}</td>
        <td>{{$Gol5MLN[6]}}</td>
        <td>{{$Gol6MLN[6]}}</td>
        <td>{{$Gol7MLN[6]}}</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Agustus</td>
        <td>{{count($data[7])}}</td>
        <td>{{$PTDN[7]}}</td>
        <td>{{$Gol1TDN[7]}}</td>
        <td>{{$Gol2TDN[7]}}</td>
        <td>{{$Gol3TDN[7]}}</td>
        <td>{{$Gol4TDN[7]}}</td>
        <td>{{$Gol5TDN[7]}}</td>
        <td>{{$Gol6TDN[7]}}</td>
        <td>{{$Gol7TDN[7]}}</td>
        <td>{{$PMDN[7]}}</td>
        <td>{{$Gol1MDN[7]}}</td>
        <td>{{$Gol2MDN[7]}}</td>
        <td>{{$Gol3MDN[7]}}</td>
        <td>{{$Gol4MDN[7]}}</td>
        <td>{{$Gol5MDN[7]}}</td>
        <td>{{$Gol6MDN[7]}}</td>
        <td>{{$Gol7MDN[7]}}</td>
        <td>{{$PTLN[7]}}</td>
        <td>{{$Gol1TLN[7]}}</td>
        <td>{{$Gol2TLN[7]}}</td>
        <td>{{$Gol3TLN[7]}}</td>
        <td>{{$Gol4TLN[7]}}</td>
        <td>{{$Gol5TLN[7]}}</td>
        <td>{{$Gol6TLN[7]}}</td>
        <td>{{$Gol7TLN[7]}}</td>
        <td>{{$PMLN[7]}}</td>
        <td>{{$Gol1MLN[7]}}</td>
        <td>{{$Gol2MLN[7]}}</td>
        <td>{{$Gol3MLN[7]}}</td>
        <td>{{$Gol4MLN[7]}}</td>
        <td>{{$Gol5MLN[7]}}</td>
        <td>{{$Gol6MLN[7]}}</td>
        <td>{{$Gol7MLN[7]}}</td>
    </tr>
    <tr>
        <td>9</td>
        <td>September</td>
        <td>{{count($data[8])}}</td>
        <td>{{$PTDN[8]}}</td>
        <td>{{$Gol1TDN[8]}}</td>
        <td>{{$Gol2TDN[8]}}</td>
        <td>{{$Gol3TDN[8]}}</td>
        <td>{{$Gol4TDN[8]}}</td>
        <td>{{$Gol5TDN[8]}}</td>
        <td>{{$Gol6TDN[8]}}</td>
        <td>{{$Gol7TDN[8]}}</td>
        <td>{{$PMDN[8]}}</td>
        <td>{{$Gol1MDN[8]}}</td>
        <td>{{$Gol2MDN[8]}}</td>
        <td>{{$Gol3MDN[8]}}</td>
        <td>{{$Gol4MDN[8]}}</td>
        <td>{{$Gol5MDN[8]}}</td>
        <td>{{$Gol6MDN[8]}}</td>
        <td>{{$Gol7MDN[8]}}</td>
        <td>{{$PTLN[8]}}</td>
        <td>{{$Gol1TLN[8]}}</td>
        <td>{{$Gol2TLN[8]}}</td>
        <td>{{$Gol3TLN[8]}}</td>
        <td>{{$Gol4TLN[8]}}</td>
        <td>{{$Gol5TLN[8]}}</td>
        <td>{{$Gol6TLN[8]}}</td>
        <td>{{$Gol7TLN[8]}}</td>
        <td>{{$PMLN[8]}}</td>
        <td>{{$Gol1MLN[8]}}</td>
        <td>{{$Gol2MLN[8]}}</td>
        <td>{{$Gol3MLN[8]}}</td>
        <td>{{$Gol4MLN[8]}}</td>
        <td>{{$Gol5MLN[8]}}</td>
        <td>{{$Gol6MLN[8]}}</td>
        <td>{{$Gol7MLN[8]}}</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Oktober</td>
        <td>{{count($data[9])}}</td>
        <td>{{$PTDN[9]}}</td>
        <td>{{$Gol1TDN[9]}}</td>
        <td>{{$Gol2TDN[9]}}</td>
        <td>{{$Gol3TDN[9]}}</td>
        <td>{{$Gol4TDN[9]}}</td>
        <td>{{$Gol5TDN[9]}}</td>
        <td>{{$Gol6TDN[9]}}</td>
        <td>{{$Gol7TDN[9]}}</td>
        <td>{{$PMDN[9]}}</td>
        <td>{{$Gol1MDN[9]}}</td>
        <td>{{$Gol2MDN[9]}}</td>
        <td>{{$Gol3MDN[9]}}</td>
        <td>{{$Gol4MDN[9]}}</td>
        <td>{{$Gol5MDN[9]}}</td>
        <td>{{$Gol6MDN[9]}}</td>
        <td>{{$Gol7MDN[9]}}</td>
        <td>{{$PTLN[9]}}</td>
        <td>{{$Gol1TLN[9]}}</td>
        <td>{{$Gol2TLN[9]}}</td>
        <td>{{$Gol3TLN[9]}}</td>
        <td>{{$Gol4TLN[9]}}</td>
        <td>{{$Gol5TLN[9]}}</td>
        <td>{{$Gol6TLN[9]}}</td>
        <td>{{$Gol7TLN[9]}}</td>
        <td>{{$PMLN[9]}}</td>
        <td>{{$Gol1MLN[9]}}</td>
        <td>{{$Gol2MLN[9]}}</td>
        <td>{{$Gol3MLN[9]}}</td>
        <td>{{$Gol4MLN[9]}}</td>
        <td>{{$Gol5MLN[9]}}</td>
        <td>{{$Gol6MLN[9]}}</td>
        <td>{{$Gol7MLN[9]}}</td>
    </tr>
    <tr>
        <td>11</td>
        <td>November</td>
        <td>{{count($data[10])}}</td>
        <td>{{$PTDN[10]}}</td>
        <td>{{$Gol1TDN[10]}}</td>
        <td>{{$Gol2TDN[10]}}</td>
        <td>{{$Gol3TDN[10]}}</td>
        <td>{{$Gol4TDN[10]}}</td>
        <td>{{$Gol5TDN[10]}}</td>
        <td>{{$Gol6TDN[10]}}</td>
        <td>{{$Gol7TDN[10]}}</td>
        <td>{{$PMDN[10]}}</td>
        <td>{{$Gol1MDN[10]}}</td>
        <td>{{$Gol2MDN[10]}}</td>
        <td>{{$Gol3MDN[10]}}</td>
        <td>{{$Gol4MDN[10]}}</td>
        <td>{{$Gol5MDN[10]}}</td>
        <td>{{$Gol6MDN[10]}}</td>
        <td>{{$Gol7MDN[10]}}</td>
        <td>{{$PTLN[10]}}</td>
        <td>{{$Gol1TLN[10]}}</td>
        <td>{{$Gol2TLN[10]}}</td>
        <td>{{$Gol3TLN[10]}}</td>
        <td>{{$Gol4TLN[10]}}</td>
        <td>{{$Gol5TLN[10]}}</td>
        <td>{{$Gol6TLN[10]}}</td>
        <td>{{$Gol7TLN[10]}}</td>
        <td>{{$PMLN[10]}}</td>
        <td>{{$Gol1MLN[10]}}</td>
        <td>{{$Gol2MLN[10]}}</td>
        <td>{{$Gol3MLN[10]}}</td>
        <td>{{$Gol4MLN[10]}}</td>
        <td>{{$Gol5MLN[10]}}</td>
        <td>{{$Gol6MLN[10]}}</td>
        <td>{{$Gol7MLN[10]}}</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Desember</td>
        <td>{{count($data[11])}}</td>
        <td>{{$PTDN[11]}}</td>
        <td>{{$Gol1TDN[11]}}</td>
        <td>{{$Gol2TDN[11]}}</td>
        <td>{{$Gol3TDN[11]}}</td>
        <td>{{$Gol4TDN[11]}}</td>
        <td>{{$Gol5TDN[11]}}</td>
        <td>{{$Gol6TDN[11]}}</td>
        <td>{{$Gol7TDN[11]}}</td>
        <td>{{$PMDN[11]}}</td>
        <td>{{$Gol1MDN[11]}}</td>
        <td>{{$Gol2MDN[11]}}</td>
        <td>{{$Gol3MDN[11]}}</td>
        <td>{{$Gol4MDN[11]}}</td>
        <td>{{$Gol5MDN[11]}}</td>
        <td>{{$Gol6MDN[11]}}</td>
        <td>{{$Gol7MDN[11]}}</td>
        <td>{{$PTLN[11]}}</td>
        <td>{{$Gol1TLN[11]}}</td>
        <td>{{$Gol2TLN[11]}}</td>
        <td>{{$Gol3TLN[11]}}</td>
        <td>{{$Gol4TLN[11]}}</td>
        <td>{{$Gol5TLN[11]}}</td>
        <td>{{$Gol6TLN[11]}}</td>
        <td>{{$Gol7TLN[11]}}</td>
        <td>{{$PMLN[11]}}</td>
        <td>{{$Gol1MLN[11]}}</td>
        <td>{{$Gol2MLN[11]}}</td>
        <td>{{$Gol3MLN[11]}}</td>
        <td>{{$Gol4MLN[11]}}</td>
        <td>{{$Gol5MLN[11]}}</td>
        <td>{{$Gol6MLN[11]}}</td>
        <td>{{$Gol7MLN[11]}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
