<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbOpPel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_op_pel', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pelabuhan');
            $table->String('nama_perusahaan', 50);
            $table->String('nama_kapal', 50);
            $table->String('type_kapal', 50);
            $table->integer('gt');
            $table->double('panjang');
            $table->double('lebar');
            $table->String('draft', 50);
            $table->String('kd_pel_asal', 50);
            $table->integer('kd_jarak');
            $table->String('kd_wkt_berlayar', 20);
            $table->date('kd_tb_tgl');
            $table->time('kd_tb_jam');
            $table->time('kd_tambat');
            $table->time('kd_jam_labuh');
            $table->String('kb_pel_tujuan', 50);
            $table->integer('kb_jarak');
            $table->date('kb_tgl');
            $table->time('kb_jam');
            $table->String('nomor_sp', 50);
            $table->date('tgl_sp');
            $table->String('kon_bahan_bakar', 50);
            $table->String('jen_bahan_bakar', 50);
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
