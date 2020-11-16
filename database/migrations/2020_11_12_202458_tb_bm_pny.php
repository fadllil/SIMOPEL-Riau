<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbBmPny extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_bm_pny', function (Blueprint $table) {
            $table->id();
            $table->String('id_penyeberangan', 50);
            $table->String('nama_perusahaan', 50);
            $table->String('nama_kapal', 50);
            $table->date('adn_b_tgl');
            $table->String('adn_b_lb', 50);
            $table->integer('adn_b_pt');
            $table->integer('adn_b_gol1');
            $table->integer('adn_b_gol2');
            $table->integer('adn_b_gol3');
            $table->integer('adn_b_gol4');
            $table->integer('adn_b_gol5');
            $table->integer('adn_b_gol6');
            $table->integer('adn_b_gol7');
            $table->date('adn_m_tgl');
            $table->String('adn_m_lm', 50);
            $table->integer('adn_m_pn');
            $table->integer('adn_m_gol1');
            $table->integer('adn_m_gol2');
            $table->integer('adn_m_gol3');
            $table->integer('adn_m_gol4');
            $table->integer('adn_m_gol5');
            $table->integer('adn_m_gol6');
            $table->integer('adn_m_gol7');
            $table->date('aln_b_tgl');
            $table->String('aln_b_lb', 50);
            $table->integer('aln_b_pt');
            $table->integer('aln_b_gol1');
            $table->integer('aln_b_gol2');
            $table->integer('aln_b_gol3');
            $table->integer('aln_b_gol4');
            $table->integer('aln_b_gol5');
            $table->integer('aln_b_gol6');
            $table->integer('aln_b_gol7');
            $table->date('aln_m_tgl');
            $table->String('aln_m_lm', 50);
            $table->integer('aln_m_pn');
            $table->integer('aln_m_gol1');
            $table->integer('aln_m_gol2');
            $table->integer('aln_m_gol3');
            $table->integer('aln_m_gol4');
            $table->integer('aln_m_gol5');
            $table->integer('aln_m_gol6');
            $table->integer('aln_m_gol7');
            $table->Text('ket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
