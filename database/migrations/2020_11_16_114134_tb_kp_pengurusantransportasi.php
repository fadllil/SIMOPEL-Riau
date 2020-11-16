<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbKpPengurusantransportasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kp_pengurusantransportasi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_perusahaan');
            $table->date('tanggal');
            $table->string('nama_barang', 50);
            $table->string('nama_kapal', 50);
            $table->string('jenis', 50);
            $table->double('import_tonase');
            $table->string('import_pib', 20);
            $table->double('in_ap_tonase');
            $table->string('in_ap_pmb', 20);
            $table->double('ekspor_tonase');
            $table->string('ekspor_peb', 20);
            $table->double('uit_ap_tonase');
            $table->string('uit_ap_pmb', 20);
            $table->double('jumlah_tonase');
            $table->double('jumlah_in_uit');
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
