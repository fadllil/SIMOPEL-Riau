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
    <h5>Laporan Bulanan Bongkar Muat Pelabuhan</h5>
        <h6>Dinas Perhubungan Provinsi Riau</h6>
</center>

<p>Nama Pelabuhan : {{$user->nama_perusahaan}}</p>
<p>Bulan/Tahun : {{\Carbon\Carbon::parse($tgl)->format('M/Y')}}</p>

<table class='table table-bordered'>
    <thead>
    <tr>
        <th style="width: 10px" rowspan="5">No</th>
        <th rowspan="5">Nama Perusahaan</th>
        <th colspan="2" rowspan="3">Waktu</th>
        <th colspan="12">Angkutan Dalam Negeri</th>
        <th colspan="12">Angkutan Luar Negeri</th>
        <th rowspan="5">Keterangan</th>
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
        <th rowspan="2">Hari</th>
        <th rowspan="2">Tanggal</th>
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
    <?php
    $no = 0;
    foreach ($bongkarmuat_list as $bongkarmuat):
    $no++;
    ?>
    <tr>
        <td style="width: 10px">{{ $no }}</td>
        <td>{{$bongkarmuat->nama_perusahaan}}</td>
        <?php
        $adn_b_tgl = \Carbon\Carbon::parse($bongkarmuat->adn_b_tgl)->format('D');
        $adn_b_tgl = str_replace('Sun', 'Minggu', $adn_b_tgl);
        $adn_b_tgl = str_replace('Mon', 'Senin', $adn_b_tgl);
        $adn_b_tgl = str_replace('Tue', 'Selasa', $adn_b_tgl);
        $adn_b_tgl = str_replace('Wed', 'Rabu', $adn_b_tgl);
        $adn_b_tgl = str_replace('Thu', 'Kamis', $adn_b_tgl);
        $adn_b_tgl = str_replace('Fri', 'Jumat', $adn_b_tgl);
        $adn_b_tgl = str_replace('Sat', 'Sabtu', $adn_b_tgl);
        ?>
        <td>{{$adn_b_tgl}}</td>
        <td>{{\Carbon\Carbon::parse($bongkarmuat->adn_b_tgl)->format('d/m/Y')}}</td>
        <td>{{$bongkarmuat->adn_b_pt}}</td>
        <td>{{$bongkarmuat->adn_b_hewan}}</td>
        <td>{{$bongkarmuat->adn_b_peti}}</td>
        <td>{{$bongkarmuat->adn_b_jumlah}}</td>
        <td>{{$bongkarmuat->adn_b_barang}}</td>
        <td>{{$bongkarmuat->adn_b_volume}}</td>
        <td>{{$bongkarmuat->adn_m_pn}}</td>
        <td>{{$bongkarmuat->adn_m_hewan}}</td>
        <td>{{$bongkarmuat->adn_m_peti}}</td>
        <td>{{$bongkarmuat->adn_m_jumlah}}</td>
        <td>{{$bongkarmuat->adn_m_barang}}</td>
        <td>{{$bongkarmuat->adn_m_volume}}</td>
        <td>{{$bongkarmuat->aln_b_pt}}</td>
        <td>{{$bongkarmuat->aln_b_hewan}}</td>
        <td>{{$bongkarmuat->aln_b_peti}}</td>
        <td>{{$bongkarmuat->aln_b_jumlah}}</td>
        <td>{{$bongkarmuat->aln_b_barang}}</td>
        <td>{{$bongkarmuat->aln_b_volume}}</td>
        <td>{{$bongkarmuat->aln_m_pn}}</td>
        <td>{{$bongkarmuat->aln_m_hewan}}</td>
        <td>{{$bongkarmuat->aln_m_peti}}</td>
        <td>{{$bongkarmuat->aln_m_jumlah}}</td>
        <td>{{$bongkarmuat->aln_m_barang}}</td>
        <td>{{$bongkarmuat->aln_m_volume}}</td>
        <td>{{$bongkarmuat->ket}}</td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
