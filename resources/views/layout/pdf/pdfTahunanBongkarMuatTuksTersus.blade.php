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

<p>Nama Pelabuhan : {{$user->nama_perusahaan}}</p>
<p>Tahun : {{\Carbon\Carbon::parse($tgl)->format('Y')}}</p>

<table class='table table-bordered'>
    <thead>
    <tr>
        <th style="width: 10px" rowspan="5">No</th>
        <th rowspan="5">Bulan</th>
        <th rowspan="5">Jumlah Bongkar Muat</th>
        <th colspan="12">Angkutan Dalam Negeri</th>
        <th colspan="12">Angkutan Luar Negeri</th>
    </tr>
    <tr>
        <th colspan="6">Bongkar</th>
        <th colspan="6">Muat</th>
        <th colspan="6">Bongkar</th>
        <th colspan="6">Muat</th>
    </tr>
    <tr>
        <th colspan="6">Dalam Negeri (Antar Pulau)</th>
        <th colspan="6">Dalam Negeri (Antar Pulau)</th>
        <th colspan="6">Import</th>
        <th colspan="6">Export</th>
    </tr>
    <tr>
        <th rowspan="2">Penumpang Turun (Orang)</th>
        <th rowspan="2">Hewan (Ekor)</th>
        <th colspan="4">Jenis Muatan</th>
        <th rowspan="2">Penumpang Naik (Orang)</th>
        <th rowspan="2">Hewan (Ekor)</th>
        <th colspan="4">Jenis Muatan</th>
        <th rowspan="2">Penumpang Turun (Orang)</th>
        <th rowspan="2">Hewan (Ekor)</th>
        <th colspan="4">Jenis Muatan</th>
        <th rowspan="2">Penumpang Naik (Orang)</th>
        <th rowspan="2">Hewan (Ekor)</th>
        <th colspan="4">Jenis Muatan</th>
    </tr>
    <tr>
        <th>Peti Kemas</th>
        <th>Jumlah</th>
        <th>Barang</th>
        <th>Volume (Ton/M3)</th>
        <th>Peti Kemas</th>
        <th>Jumlah</th>
        <th>Barang</th>
        <th>Volume (Ton/M3)</th>
        <th>Peti Kemas</th>
        <th>Jumlah</th>
        <th>Barang</th>
        <th>Volume (Ton/M3)</th>
        <th>Peti Kemas</th>
        <th>Jumlah</th>
        <th>Barang</th>
        <th>Volume (Ton/M3)</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Januari</td>
        <td>{{count($data[0])}}</td>
        <td>{{$PTDN[0]}}</td>
        <td>{{$HewanTDN[0]}}</td>
        <td>{{$PetiTDN[0]}}</td>
        <td>{{$JumlahTDN[0]}}</td>
        <td>{{$BarangTDN[0]}}</td>
        <td>{{$VolumeTDN[0]}}</td>
        <td>{{$PMDN[0]}}</td>
        <td>{{$HewanMDN[0]}}</td>
        <td>{{$PetiMDN[0]}}</td>
        <td>{{$JumlahMDN[0]}}</td>
        <td>{{$BarangMDN[0]}}</td>
        <td>{{$VolumeMDN [0]}}</td>
        <td>{{$PTLN[0]}}</td>
        <td>{{$HewanTLN[0]}}</td>
        <td>{{$PetiTLN[0]}}</td>
        <td>{{$JumlahTLN[0]}}</td>
        <td>{{$BarangTLN[0]}}</td>
        <td>{{$VolumeTLN[0]}}</td>
        <td>{{$PMLN[0]}}</td>
        <td>{{$HewanMLN[0]}}</td>
        <td>{{$PetiMLN[0]}}</td>
        <td>{{$JumlahMLN[0]}}</td>
        <td>{{$BarangMLN[0]}}</td>
        <td>{{$VolumeMLN[0]}}</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Februari</td>
        <td>{{count($data[1])}}</td>
        <td>{{$PTDN[1]}}</td>
        <td>{{$HewanTDN[1]}}</td>
        <td>{{$PetiTDN[1]}}</td>
        <td>{{$JumlahTDN[1]}}</td>
        <td>{{$BarangTDN[1]}}</td>
        <td>{{$VolumeTDN[1]}}</td>
        <td>{{$PMDN[1]}}</td>
        <td>{{$HewanMDN[1]}}</td>
        <td>{{$PetiMDN[1]}}</td>
        <td>{{$JumlahMDN[1]}}</td>
        <td>{{$BarangMDN[1]}}</td>
        <td>{{$VolumeMDN [1]}}</td>
        <td>{{$PTLN[1]}}</td>
        <td>{{$HewanTLN[1]}}</td>
        <td>{{$PetiTLN[1]}}</td>
        <td>{{$JumlahTLN[1]}}</td>
        <td>{{$BarangTLN[1]}}</td>
        <td>{{$VolumeTLN[1]}}</td>
        <td>{{$PMLN[1]}}</td>
        <td>{{$HewanMLN[1]}}</td>
        <td>{{$PetiMLN[1]}}</td>
        <td>{{$JumlahMLN[1]}}</td>
        <td>{{$BarangMLN[1]}}</td>
        <td>{{$VolumeMLN[1]}}</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Maret</td>
        <td>{{count($data[2])}}</td>
        <td>{{$PTDN[2]}}</td>
        <td>{{$HewanTDN[2]}}</td>
        <td>{{$PetiTDN[2]}}</td>
        <td>{{$JumlahTDN[2]}}</td>
        <td>{{$BarangTDN[2]}}</td>
        <td>{{$VolumeTDN[2]}}</td>
        <td>{{$PMDN[2]}}</td>
        <td>{{$HewanMDN[2]}}</td>
        <td>{{$PetiMDN[2]}}</td>
        <td>{{$JumlahMDN[2]}}</td>
        <td>{{$BarangMDN[2]}}</td>
        <td>{{$VolumeMDN [2]}}</td>
        <td>{{$PTLN[2]}}</td>
        <td>{{$HewanTLN[2]}}</td>
        <td>{{$PetiTLN[2]}}</td>
        <td>{{$JumlahTLN[2]}}</td>
        <td>{{$BarangTLN[2]}}</td>
        <td>{{$VolumeTLN[2]}}</td>
        <td>{{$PMLN[2]}}</td>
        <td>{{$HewanMLN[2]}}</td>
        <td>{{$PetiMLN[2]}}</td>
        <td>{{$JumlahMLN[2]}}</td>
        <td>{{$BarangMLN[2]}}</td>
        <td>{{$VolumeMLN[2]}}</td>
    </tr>
    <tr>
        <td>4</td>
        <td>April</td>
        <td>{{count($data[3])}}</td>
        <td>{{$PTDN[3]}}</td>
        <td>{{$HewanTDN[3]}}</td>
        <td>{{$PetiTDN[3]}}</td>
        <td>{{$JumlahTDN[3]}}</td>
        <td>{{$BarangTDN[3]}}</td>
        <td>{{$VolumeTDN[3]}}</td>
        <td>{{$PMDN[3]}}</td>
        <td>{{$HewanMDN[3]}}</td>
        <td>{{$PetiMDN[3]}}</td>
        <td>{{$JumlahMDN[3]}}</td>
        <td>{{$BarangMDN[3]}}</td>
        <td>{{$VolumeMDN [3]}}</td>
        <td>{{$PTLN[3]}}</td>
        <td>{{$HewanTLN[3]}}</td>
        <td>{{$PetiTLN[3]}}</td>
        <td>{{$JumlahTLN[3]}}</td>
        <td>{{$BarangTLN[3]}}</td>
        <td>{{$VolumeTLN[3]}}</td>
        <td>{{$PMLN[3]}}</td>
        <td>{{$HewanMLN[3]}}</td>
        <td>{{$PetiMLN[3]}}</td>
        <td>{{$JumlahMLN[3]}}</td>
        <td>{{$BarangMLN[3]}}</td>
        <td>{{$VolumeMLN[3]}}</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Mei</td>
        <td>{{count($data[4])}}</td>
        <td>{{$PTDN[4]}}</td>
        <td>{{$HewanTDN[4]}}</td>
        <td>{{$PetiTDN[4]}}</td>
        <td>{{$JumlahTDN[4]}}</td>
        <td>{{$BarangTDN[4]}}</td>
        <td>{{$VolumeTDN[4]}}</td>
        <td>{{$PMDN[4]}}</td>
        <td>{{$HewanMDN[4]}}</td>
        <td>{{$PetiMDN[4]}}</td>
        <td>{{$JumlahMDN[4]}}</td>
        <td>{{$BarangMDN[4]}}</td>
        <td>{{$VolumeMDN [4]}}</td>
        <td>{{$PTLN[4]}}</td>
        <td>{{$HewanTLN[4]}}</td>
        <td>{{$PetiTLN[4]}}</td>
        <td>{{$JumlahTLN[4]}}</td>
        <td>{{$BarangTLN[4]}}</td>
        <td>{{$VolumeTLN[4]}}</td>
        <td>{{$PMLN[4]}}</td>
        <td>{{$HewanMLN[4]}}</td>
        <td>{{$PetiMLN[4]}}</td>
        <td>{{$JumlahMLN[4]}}</td>
        <td>{{$BarangMLN[4]}}</td>
        <td>{{$VolumeMLN[4]}}</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Juni</td>
        <td>{{count($data[5])}}</td>
        <td>{{$PTDN[5]}}</td>
        <td>{{$HewanTDN[5]}}</td>
        <td>{{$PetiTDN[5]}}</td>
        <td>{{$JumlahTDN[5]}}</td>
        <td>{{$BarangTDN[5]}}</td>
        <td>{{$VolumeTDN[5]}}</td>
        <td>{{$PMDN[5]}}</td>
        <td>{{$HewanMDN[5]}}</td>
        <td>{{$PetiMDN[5]}}</td>
        <td>{{$JumlahMDN[5]}}</td>
        <td>{{$BarangMDN[5]}}</td>
        <td>{{$VolumeMDN [5]}}</td>
        <td>{{$PTLN[5]}}</td>
        <td>{{$HewanTLN[5]}}</td>
        <td>{{$PetiTLN[5]}}</td>
        <td>{{$JumlahTLN[5]}}</td>
        <td>{{$BarangTLN[5]}}</td>
        <td>{{$VolumeTLN[5]}}</td>
        <td>{{$PMLN[5]}}</td>
        <td>{{$HewanMLN[5]}}</td>
        <td>{{$PetiMLN[5]}}</td>
        <td>{{$JumlahMLN[5]}}</td>
        <td>{{$BarangMLN[5]}}</td>
        <td>{{$VolumeMLN[5]}}</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Juli</td>
        <td>{{count($data[6])}}</td>
        <td>{{$PTDN[6]}}</td>
        <td>{{$HewanTDN[6]}}</td>
        <td>{{$PetiTDN[6]}}</td>
        <td>{{$JumlahTDN[6]}}</td>
        <td>{{$BarangTDN[6]}}</td>
        <td>{{$VolumeTDN[6]}}</td>
        <td>{{$PMDN[6]}}</td>
        <td>{{$HewanMDN[6]}}</td>
        <td>{{$PetiMDN[6]}}</td>
        <td>{{$JumlahMDN[6]}}</td>
        <td>{{$BarangMDN[6]}}</td>
        <td>{{$VolumeMDN [6]}}</td>
        <td>{{$PTLN[6]}}</td>
        <td>{{$HewanTLN[6]}}</td>
        <td>{{$PetiTLN[6]}}</td>
        <td>{{$JumlahTLN[6]}}</td>
        <td>{{$BarangTLN[6]}}</td>
        <td>{{$VolumeTLN[6]}}</td>
        <td>{{$PMLN[6]}}</td>
        <td>{{$HewanMLN[6]}}</td>
        <td>{{$PetiMLN[6]}}</td>
        <td>{{$JumlahMLN[6]}}</td>
        <td>{{$BarangMLN[6]}}</td>
        <td>{{$VolumeMLN[6]}}</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Agustus</td>
        <td>{{count($data[7])}}</td>
        <td>{{$PTDN[7]}}</td>
        <td>{{$HewanTDN[7]}}</td>
        <td>{{$PetiTDN[7]}}</td>
        <td>{{$JumlahTDN[7]}}</td>
        <td>{{$BarangTDN[7]}}</td>
        <td>{{$VolumeTDN[7]}}</td>
        <td>{{$PMDN[7]}}</td>
        <td>{{$HewanMDN[7]}}</td>
        <td>{{$PetiMDN[7]}}</td>
        <td>{{$JumlahMDN[7]}}</td>
        <td>{{$BarangMDN[7]}}</td>
        <td>{{$VolumeMDN [7]}}</td>
        <td>{{$PTLN[7]}}</td>
        <td>{{$HewanTLN[7]}}</td>
        <td>{{$PetiTLN[7]}}</td>
        <td>{{$JumlahTLN[7]}}</td>
        <td>{{$BarangTLN[7]}}</td>
        <td>{{$VolumeTLN[7]}}</td>
        <td>{{$PMLN[7]}}</td>
        <td>{{$HewanMLN[7]}}</td>
        <td>{{$PetiMLN[7]}}</td>
        <td>{{$JumlahMLN[7]}}</td>
        <td>{{$BarangMLN[7]}}</td>
        <td>{{$VolumeMLN[7]}}</td>
    </tr>
    <tr>
        <td>9</td>
        <td>September</td>
        <td>{{count($data[8])}}</td>
        <td>{{$PTDN[8]}}</td>
        <td>{{$HewanTDN[8]}}</td>
        <td>{{$PetiTDN[8]}}</td>
        <td>{{$JumlahTDN[8]}}</td>
        <td>{{$BarangTDN[8]}}</td>
        <td>{{$VolumeTDN[8]}}</td>
        <td>{{$PMDN[8]}}</td>
        <td>{{$HewanMDN[8]}}</td>
        <td>{{$PetiMDN[8]}}</td>
        <td>{{$JumlahMDN[8]}}</td>
        <td>{{$BarangMDN[8]}}</td>
        <td>{{$VolumeMDN [8]}}</td>
        <td>{{$PTLN[8]}}</td>
        <td>{{$HewanTLN[8]}}</td>
        <td>{{$PetiTLN[8]}}</td>
        <td>{{$JumlahTLN[8]}}</td>
        <td>{{$BarangTLN[8]}}</td>
        <td>{{$VolumeTLN[8]}}</td>
        <td>{{$PMLN[8]}}</td>
        <td>{{$HewanMLN[8]}}</td>
        <td>{{$PetiMLN[8]}}</td>
        <td>{{$JumlahMLN[8]}}</td>
        <td>{{$BarangMLN[8]}}</td>
        <td>{{$VolumeMLN[8]}}</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Oktober</td>
        <td>{{count($data[9])}}</td>
        <td>{{$PTDN[9]}}</td>
        <td>{{$HewanTDN[9]}}</td>
        <td>{{$PetiTDN[9]}}</td>
        <td>{{$JumlahTDN[9]}}</td>
        <td>{{$BarangTDN[9]}}</td>
        <td>{{$VolumeTDN[9]}}</td>
        <td>{{$PMDN[9]}}</td>
        <td>{{$HewanMDN[9]}}</td>
        <td>{{$PetiMDN[9]}}</td>
        <td>{{$JumlahMDN[9]}}</td>
        <td>{{$BarangMDN[9]}}</td>
        <td>{{$VolumeMDN [9]}}</td>
        <td>{{$PTLN[9]}}</td>
        <td>{{$HewanTLN[9]}}</td>
        <td>{{$PetiTLN[9]}}</td>
        <td>{{$JumlahTLN[9]}}</td>
        <td>{{$BarangTLN[9]}}</td>
        <td>{{$VolumeTLN[9]}}</td>
        <td>{{$PMLN[9]}}</td>
        <td>{{$HewanMLN[9]}}</td>
        <td>{{$PetiMLN[9]}}</td>
        <td>{{$JumlahMLN[9]}}</td>
        <td>{{$BarangMLN[9]}}</td>
        <td>{{$VolumeMLN[9]}}</td>
    </tr>
    <tr>
        <td>11</td>
        <td>November</td>
        <td>{{count($data[10])}}</td>
        <td>{{$PTDN[10]}}</td>
        <td>{{$HewanTDN[10]}}</td>
        <td>{{$PetiTDN[10]}}</td>
        <td>{{$JumlahTDN[10]}}</td>
        <td>{{$BarangTDN[10]}}</td>
        <td>{{$VolumeTDN[10]}}</td>
        <td>{{$PMDN[10]}}</td>
        <td>{{$HewanMDN[10]}}</td>
        <td>{{$PetiMDN[10]}}</td>
        <td>{{$JumlahMDN[10]}}</td>
        <td>{{$BarangMDN[10]}}</td>
        <td>{{$VolumeMDN [10]}}</td>
        <td>{{$PTLN[10]}}</td>
        <td>{{$HewanTLN[10]}}</td>
        <td>{{$PetiTLN[10]}}</td>
        <td>{{$JumlahTLN[10]}}</td>
        <td>{{$BarangTLN[10]}}</td>
        <td>{{$VolumeTLN[10]}}</td>
        <td>{{$PMLN[10]}}</td>
        <td>{{$HewanMLN[10]}}</td>
        <td>{{$PetiMLN[10]}}</td>
        <td>{{$JumlahMLN[10]}}</td>
        <td>{{$BarangMLN[10]}}</td>
        <td>{{$VolumeMLN[10]}}</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Desember</td>
        <td>{{count($data[11])}}</td>
        <td>{{$PTDN[11]}}</td>
        <td>{{$HewanTDN[11]}}</td>
        <td>{{$PetiTDN[11]}}</td>
        <td>{{$JumlahTDN[11]}}</td>
        <td>{{$BarangTDN[11]}}</td>
        <td>{{$VolumeTDN[11]}}</td>
        <td>{{$PMDN[11]}}</td>
        <td>{{$HewanMDN[11]}}</td>
        <td>{{$PetiMDN[11]}}</td>
        <td>{{$JumlahMDN[11]}}</td>
        <td>{{$BarangMDN[11]}}</td>
        <td>{{$VolumeMDN [11]}}</td>
        <td>{{$PTLN[11]}}</td>
        <td>{{$HewanTLN[11]}}</td>
        <td>{{$PetiTLN[11]}}</td>
        <td>{{$JumlahTLN[11]}}</td>
        <td>{{$BarangTLN[11]}}</td>
        <td>{{$VolumeTLN[11]}}</td>
        <td>{{$PMLN[11]}}</td>
        <td>{{$HewanMLN[11]}}</td>
        <td>{{$PetiMLN[11]}}</td>
        <td>{{$JumlahMLN[11]}}</td>
        <td>{{$BarangMLN[11]}}</td>
        <td>{{$VolumeMLN[11]}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
