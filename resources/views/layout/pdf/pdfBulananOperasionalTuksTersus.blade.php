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
    <h5>Laporan Bulanan Operasional Pelabuhan</h5>
        <h6>Dinas Perhubungan Provinsi Riau</h6>
</center>

<p>Nama Perusahaan : {{$user->nama_perusahaan}}</p>
<p>Bulan/Tahun : {{\Carbon\Carbon::parse($tgl)->format('M/Y')}}</p>

<table class='table table-bordered'>
    <thead>
    <tr>
        <th style="width: 10px" rowspan="3">No</th>
        <th rowspan="3">Nama Perusahaan</th>
        <th rowspan="3">Nama Kapal</th>
        <th rowspan="3">Type kapal</th>
        <th colspan="4" rowspan="2">Data kapal</th>
        <th colspan="7">Kedatangan</th>
        <th colspan="6">Keberangkatan</th>
        <th rowspan="3">Konsumsi Bahan Bakar</th>
        <th rowspan="3">Jenis Bahan Bakar</th>
        <th rowspan="3">Keterangan</th>
    </tr>
    <tr>
        <th rowspan="2">Pelabuhan Asal</th>
        <th rowspan="2">Jarak Mil</th>
        <th rowspan="2">Waktu Berlayar</th>
        <th colspan="2">Tiba</th>
        <th rowspan="2">Tambat(Jam)</th>
        <th rowspan="2">Labuh(Jam)</th>
        <th rowspan="2">Pelabuhan Tujuan</th>
        <th rowspan="2">Jarak Mil</th>
        <th rowspan="2">Hari/Tanggal</th>
        <th rowspan="2">Jam</th>
        <th colspan="2">Surat Persetujuan</th>
    </tr>
    <tr>
        <th>GT</th>
        <th>Panjang</th>
        <th>Lebar</th>
        <th>Draft</th>
        <th>Hari/Tanggal</th>
        <th>Jam</th>
        <th>Nomor</th>
        <th>Tanggal</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no = 0;
    foreach ($operasional_list as $operasional):
    $no++;
    ?>
    <tr>
        <td style="width: 10px">{{ $no }}</td>
        <td>{{$operasional->nama_perusahaan}}</td>
        <td>{{$operasional->nama_kapal}}</td>
        <td>{{$operasional->type_kapal}}</td>
        <td>{{$operasional->gt}}</td>
        <td>{{$operasional->panjang}}</td>
        <td>{{$operasional->lebar}}</td>
        <td>{{$operasional->draft}}</td>
        <td>{{$operasional->kd_pel_asal}}</td>
        <td>{{$operasional->kd_jarak}}</td>
        <td>{{$operasional->kd_wkt_berlayar}}</td>
        <?php
        $kd_tb_tgl = \Carbon\Carbon::parse($operasional->kd_tb_tgl)->format('D');
        $kd_tb_tgl = str_replace('Sun', 'Minggu', $kd_tb_tgl);
        $kd_tb_tgl = str_replace('Mon', 'Senin', $kd_tb_tgl);
        $kd_tb_tgl = str_replace('Tue', 'Selasa', $kd_tb_tgl);
        $kd_tb_tgl = str_replace('Wed', 'Rabu', $kd_tb_tgl);
        $kd_tb_tgl = str_replace('Thu', 'Kamis', $kd_tb_tgl);
        $kd_tb_tgl = str_replace('Fri', 'Jumat', $kd_tb_tgl);
        $kd_tb_tgl = str_replace('Sat', 'Sabtu', $kd_tb_tgl);
        ?>
        <td>{{$kd_tb_tgl}}/ {{\Carbon\Carbon::parse($operasional->kd_tb_tgl)->format('d/m/Y')}}</td>
        <td>{{$operasional->kd_tb_jam}}</td>
        <td>{{$operasional->kd_tambat}}</td>
        <td>{{$operasional->kd_jam_labuh}}</td>
        <td>{{$operasional->kb_pel_tujuan}}</td>
        <td>{{$operasional->kb_jarak}}</td>
        <?php
        $kb_tgl = \Carbon\Carbon::parse($operasional->kb_tgl)->format('D');
        $kb_tgl = str_replace('Sun', 'Minggu', $kb_tgl);
        $kb_tgl = str_replace('Mon', 'Senin', $kb_tgl);
        $kb_tgl = str_replace('Tue', 'Selasa', $kb_tgl);
        $kb_tgl = str_replace('Wed', 'Rabu', $kb_tgl);
        $kb_tgl = str_replace('Thu', 'Kamis', $kb_tgl);
        $kb_tgl = str_replace('Fri', 'Jumat', $kb_tgl);
        $kb_tgl = str_replace('Sat', 'Sabtu', $kb_tgl);
        ?>
        <td>{{$kb_tgl}}/ {{\Carbon\Carbon::parse($operasional->kb_tgl)->format('d/m/Y')}}</td>
        <td>{{$operasional->kb_jam}}</td>
        <td>{{$operasional->nomor_sp}}</td>
        <td>{{\Carbon\Carbon::parse($operasional->tgl_sp)->format('d/m/Y')}}</td>
        <td>{{$operasional->kon_bahan_bakar}}</td>
        <td>{{$operasional->jen_bahan_bakar}}</td>
        <td>{{$operasional->ket}}</td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
