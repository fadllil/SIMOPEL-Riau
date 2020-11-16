<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbPenjualanPasMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penjualan_pas_masuk', function (Blueprint $table) {
            $table->id();
            $table->integer('id_penyeberangan');
            $table->date('tanggal');
            $table->String('penumpang', 50);
            $table->String('gol1', 50);
            $table->String('gol2', 50);
            $table->String('gol3', 50);
            $table->String('gol4', 50);
            $table->String('gol5', 50);
            $table->String('gol6', 50);
            $table->String('gol7', 50);
            $table->String('gol8', 50);
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
