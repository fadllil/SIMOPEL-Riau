<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BongkarMuatPenyeberangan extends Model
{
    protected $table = 'tb_bm_pny';

    public $timestamps = false;

    protected $fillable = [
        'nama_perusahaan',
        'nama_kapal',
        'adn_b_tgl',
        'adn_b_lb',
        'adn_b_pt',
        'adn_b_gol1',
        'adn_b_gol2',
        'adn_b_gol3',
        'adn_b_gol4',
        'adn_b_gol5',
        'adn_b_gol6',
        'adn_b_gol7',
        'adn_m_tgl',
        'adn_m_lm',
        'adn_m_pn',
        'adn_m_gol1',
        'adn_m_gol2',
        'adn_m_gol3',
        'adn_m_gol4',
        'adn_m_gol5',
        'adn_m_gol6',
        'adn_m_gol7',
        'aln_b_tgl',
        'aln_b_lb',
        'aln_b_pt',
        'aln_b_gol1',
        'aln_b_gol2',
        'aln_b_gol3',
        'aln_b_gol4',
        'aln_b_gol5',
        'aln_b_gol6',
        'aln_b_gol7',
        'aln_m_tgl',
        'aln_m_lm',
        'aln_m_pn',
        'aln_m_gol1',
        'aln_m_gol2',
        'aln_m_gol3',
        'aln_m_gol4',
        'aln_m_gol5',
        'aln_m_gol6',
        'aln_m_gol7',
        'ket'
    ];
}
