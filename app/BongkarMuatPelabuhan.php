<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BongkarMuatPelabuhan extends Model
{
    protected $table = 'tb_bm_pel';

    public $timestamps = false;

    protected $fillable = [
        'nama_perusahaan',
        'nama_kapal',
        'adn_b_tgl',
        'adn_b_lb',
        'adn_b_pt',
        'adn_b_hewan',
        'adn_b_peti',
        'adn_b_jumlah',
        'adn_b_barang',
        'adn_b_volume',
        'adn_m_tgl',
        'adn_m_lm',
        'adn_m_pn',
        'adn_m_hewan',
        'adn_m_peti',
        'adn_m_jumlah',
        'adn_m_barang',
        'adn_m_volume',
        'aln_b_tgl',
        'aln_b_lb',
        'aln_b_pt',
        'aln_b_hewan',
        'aln_b_peti',
        'aln_b_jumlah',
        'aln_b_barang',
        'aln_b_volume',
        'aln_m_tgl',
        'aln_m_lm',
        'aln_m_pn',
        'aln_m_hewan',
        'aln_m_peti',
        'aln_m_jumlah',
        'aln_m_barang',
        'aln_m_volume',
        'ket'
    ];
}
