<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbKpPerla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kp_perla', function (Blueprint $table) {
            $table->id();
            $table->integer('id_perusahaan');
            $table->string('nama_kapal', 50);
            $table->string('bendera', 50);
            $table->string('type', 50);
            $table->string('kec_ekonomis', 50);
            $table->string('status_trayek', 50);
            $table->string('pelabuhan_asal', 50);
            $table->date('tb_tgl');
            $table->time('tb_jam');
            $table->date('bk_tgl');
            $table->time('bk_jam');
            $table->integer('jarak');
            $table->string('berlayar_hari', 20);
            $table->time('berlayar_jam');
            $table->string('berlabuh_hari', 20);
            $table->time('berlabuh_jam');
            $table->time('bm_mulai');
            $table->time('bm_selesai');
            $table->string('pelabuhan_tujuan', 50);
            $table->string('b_m', 50);
            $table->double('berat');
            $table->double('ukuran');
            $table->integer('penumpang');
            $table->integer('hewan');
            $table->string('jenis_barang', 50);
            $table->string('kemasan', 50);
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
