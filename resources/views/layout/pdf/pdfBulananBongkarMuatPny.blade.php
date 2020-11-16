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
    <h5>Laporan Bulanan Bongkar Muat Penyeberangan</h5>
        <h6>Dinas Perhubungan Provinsi Riau</h6>
</center>

<p>Nama Pelabuhan : {{$user->nama_penyeberangan}}</p>
<p>Bulan/Tahun : {{\Carbon\Carbon::parse($tgl)->format('M/Y')}}</p>

<table class='table table-bordered'>
    <thead>
    <tr>
        <th style="width: 10px" rowspan="5">No</th>
        <th rowspan="5">Nama Perusahaan</th>
        <th colspan="2" rowspan="3">Waktu</th>
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
        <th rowspan="2">Hari</th>
        <th rowspan="2">Tanggal</th>
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
        <td>{{$bongkarmuat->adn_b_gol1}}</td>
        <td>{{$bongkarmuat->adn_b_gol2}}</td>
        <td>{{$bongkarmuat->adn_b_gol3}}</td>
        <td>{{$bongkarmuat->adn_b_gol4}}</td>
        <td>{{$bongkarmuat->adn_b_gol5}}</td>
        <td>{{$bongkarmuat->adn_b_gol6}}</td>
        <td>{{$bongkarmuat->adn_b_gol7}}</td>
        <td>{{$bongkarmuat->adn_m_pn}}</td>
        <td>{{$bongkarmuat->adn_m_gol1}}</td>
        <td>{{$bongkarmuat->adn_m_gol2}}</td>
        <td>{{$bongkarmuat->adn_m_gol3}}</td>
        <td>{{$bongkarmuat->adn_m_gol4}}</td>
        <td>{{$bongkarmuat->adn_m_gol5}}</td>
        <td>{{$bongkarmuat->adn_m_gol6}}</td>
        <td>{{$bongkarmuat->adn_m_gol7}}</td>
        <td>{{$bongkarmuat->aln_b_pt}}</td>
        <td>{{$bongkarmuat->aln_b_gol1}}</td>
        <td>{{$bongkarmuat->aln_b_gol2}}</td>
        <td>{{$bongkarmuat->aln_b_gol3}}</td>
        <td>{{$bongkarmuat->aln_b_gol4}}</td>
        <td>{{$bongkarmuat->aln_b_gol5}}</td>
        <td>{{$bongkarmuat->aln_b_gol6}}</td>
        <td>{{$bongkarmuat->aln_b_gol7}}</td>
        <td>{{$bongkarmuat->aln_m_pn}}</td>
        <td>{{$bongkarmuat->aln_m_gol1}}</td>
        <td>{{$bongkarmuat->aln_m_gol2}}</td>
        <td>{{$bongkarmuat->aln_m_gol3}}</td>
        <td>{{$bongkarmuat->aln_m_gol4}}</td>
        <td>{{$bongkarmuat->aln_m_gol5}}</td>
        <td>{{$bongkarmuat->aln_m_gol6}}</td>
        <td>{{$bongkarmuat->aln_m_gol7}}</td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
