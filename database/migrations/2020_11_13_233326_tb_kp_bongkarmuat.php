<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbKpBongkarmuat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kp_bongkarmuat', function (Blueprint $table) {
            $table->id();
            $table->integer('id_perusahaan');
            $table->string('nama_kapal', 50);
            $table->string('bendera', 50);
            $table->string('ukuran', 20);
            $table->string('nama_agen', 50);
            $table->integer('jumlah_bm');
            $table->dateTime('mulai');
            $table->dateTime('selesai');
            $table->integer('jumlah_buruh');
            $table->string('asal_barang', 50);
            $table->string('tujuan', 50);
            $table->string('jenis', 50);
            $table->string('penunjukan', 50);
            $table->string('ket', 50);
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
