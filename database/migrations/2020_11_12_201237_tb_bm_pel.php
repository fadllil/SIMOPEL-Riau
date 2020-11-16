<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbBmPel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_bm_pel', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pelabuhan');
            $table->String('nama_perusahaan', 50);
            $table->String('nama_kapal', 50);
            $table->date('adn_b_tgl');
            $table->String('adn_b_lb', 50);
            $table->integer('adn_b_pt');
            $table->integer('adn_b_hewan');
            $table->integer('adn_b_peti');
            $table->integer('adn_b_jumlah');
            $table->integer('adn_b_barang');
            $table->double('adn_b_volume');
            $table->date('adn_m_tgl');
            $table->String('adn_m_lm', 50);
            $table->integer('adn_m_pn');
            $table->integer('adn_m_hewan');
            $table->integer('adn_m_peti');
            $table->integer('adn_m_jumlah');
            $table->integer('adn_m_barang');
            $table->double('adn_m_volume');
            $table->date('aln_b_tgl');
            $table->String('aln_b_lb', 50);
            $table->integer('aln_b_pt');
            $table->integer('aln_b_hewan');
            $table->integer('aln_b_peti');
            $table->integer('aln_b_jumlah');
            $table->integer('aln_b_barang');
            $table->double('aln_b_volume');
            $table->date('aln_m_tgl');
            $table->String('aln_m_lm', 50);
            $table->integer('aln_m_pn');
            $table->integer('aln_m_hewan');
            $table->integer('aln_m_peti');
            $table->integer('aln_m_jumlah');
            $table->integer('aln_m_barang');
            $table->double('aln_m_volume');
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
