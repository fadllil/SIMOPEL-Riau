<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbPajak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pajak_retribusidaerah', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->date('tgl');
            $table->string('labuh_kapal', 50);
            $table->string('tambat', 50);
            $table->string('barang', 50);
            $table->string('hewan', 50);
            $table->string('gudang', 50);
            $table->string('lapangan', 50);
            $table->string('penyimpanan', 50);
            $table->string('pas_penumpang', 50);
            $table->string('gol_1', 50);
            $table->string('gol_2', 50);
            $table->string('gol_3', 50);
            $table->string('gol_4', 50);
            $table->string('gol_5', 50);
            $table->string('gol_6', 50);
            $table->string('gol_7', 50);
            $table->string('gol_8', 50);
            $table->string('papan_reklame', 50);
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
