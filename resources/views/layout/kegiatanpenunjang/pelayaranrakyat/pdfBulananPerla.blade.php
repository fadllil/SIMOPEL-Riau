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
    <h5>Laporan Bulanan Pelayaran Rakyat Kegiatan Penunjang</h5>
    <h6>Dinas Perhubungan Provinsi Riau</h6>
</center>

<p>Nama Pelabuhan : {{$user->nama_perusahaan}}</p>
<p>Bulan/Tahun : {{\Carbon\Carbon::parse($tgl)->format('M/Y')}}</p>

<table class='table table-bordered'>
    <thead>
    <tr>
        <th style="width: 10px" rowspan="2">No</th>
        <th rowspan="2">Nama Kapal</th>
        <th rowspan="2">Bendera/Status Kapal</th>
        <th rowspan="2">Type/Ukuran Kapal</th>
        <th rowspan="2">Kecepatan Ekonomis</th>
        <th rowspan="2">Status Trayek</th>
        <th rowspan="2">Pelabuhan Asal</th>
        <th colspan="2">Tiba</th>
        <th colspan="2">Berangkat</th>
        <th rowspan="2">Jarak Mil</th>
        <th colspan="2">Waktu Berlayar</th>
        <th colspan="2">Waktu Berlabuh</th>
        <th colspan="2">Bongkar Muat</th>
        <th rowspan="2">Waktu Yang Diperlukan</th>
        <th rowspan="2">Pelabuhan Tujuan</th>
        <th colspan="7">Pemuatan/Pemberangkatan</th>
    </tr>
    <tr>
        <th>Tgl</th>
        <th>Jam</th>
        <th>Tgl</th>
        <th>Jam</th>
        <th>Heri</th>
        <th>Jam</th>
        <th>Hari</th>
        <th>Jam</th>
        <th>Mulai</th>
        <th>Selesai</th>
        <th>B/M</th>
        <th>Ton 1000 Kg</th>
        <th>Ukuran (M3)</th>
        <th>Penumpang</th>
        <th>Hewan</th>
        <th>Jenis Barang</th>
        <th>Kemasan</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no = 0;
    foreach ($perla_list as $perla):
    $no++;
    ?>
    <tr>
        <td style="width: 10px">{{ $no }}</td>
        <td>{{$perla->nama_kapal}}</td>
        <td>{{$perla->bendera}}</td>
        <td>{{$perla->type}}</td>
        <td>{{$perla->kec_ekonomis}}</td>
        <td>{{$perla->status_trayek}}</td>
        <td>{{$perla->pelabuhan_asal}}</td>
        <td>{{\Carbon\Carbon::parse($perla->tb_tgl)->format('d/m/Y')}}</td>
        <td>{{\Carbon\Carbon::parse($perla->tb_jam)->format('H:i')}}</td>
        <td>{{\Carbon\Carbon::parse($perla->bk_tgl)->format('d/m/Y')}}</td>
        <td>{{\Carbon\Carbon::parse($perla->bk_jam)->format('H:i')}}</td>
        <td>{{$perla->jarak}}</td>
        <td>{{$perla->berlayar_hari}}</td>
        <td>{{\Carbon\Carbon::parse($perla->berlayar_jam)->format('H:i')}}</td>
        <td>{{$perla->berlabuh_hari}}</td>
        <td>{{\Carbon\Carbon::parse($perla->berlabuh_jam)->format('H:i')}}</td>
        <td>{{\Carbon\Carbon::parse($perla->bm_mulai)->format('H:i')}}</td>
        <td>{{\Carbon\Carbon::parse($perla->bm_selesai)->format('H:i')}}</td>
        <?php
        if($perla->bm_mulai != '' && $perla->bm_selesai != '' ){
        $awal = $perla->bm_mulai;
        $selesai = $perla->bm_selesai;
        $to = \Carbon\Carbon::createFromFormat('H:i:s', $awal);
        $from = \Carbon\Carbon::createFromFormat('H:i:s', $selesai);
        $diff_in_hours = $to->diffInMinutes($from);
        ?>
        <td>{{$diff_in_hours}} Menit</td>
        <?php
        }else{
        ?>
        <td></td>
        <?php
        }
        ?>
        <td>{{$perla->pelabuhan_tujuan}}</td>
        <td>{{$perla->b_m}}</td>
        <td>{{$perla->berat}}</td>
        <td>{{$perla->ukuran}}</td>
        <td>{{$perla->penumpang}}</td>
        <td>{{$perla->hewan}}</td>
        <td>{{$perla->jenis_barang}}</td>
        <td>{{$perla->kemasan}}</td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
