<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbFasilitasDaratPelpny extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_fasilitas_darat_pelpny', function (Blueprint $table) {
            $table->id();
            $table->integer('id_fasilitas');
            $table->double('luas_darat');
            $table->string('perkantoran', 20);
            $table->integer('timbangan');
            $table->string('bengkel', 20);
            $table->string('uplc', 20);
            $table->string('tplb3', 20);
            $table->integer('power_plan');
            $table->integer('tanki_bbm');
            $table->integer('tanki_air');
            $table->string('bangunan_utility', 20);
            $table->integer('gardu_listrik_pln');
            $table->string('tempat_penimbunan', 20);
            $table->string('kantor_d_pos', 20);
            $table->string('musholla_d_kantin', 20);
            $table->string('gudang_tertutup', 20);
            $table->string('gudang_terbuka', 20);
            $table->string('mess', 20);
            $table->string('kbkki', 20);
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
