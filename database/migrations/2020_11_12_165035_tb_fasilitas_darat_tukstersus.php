<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbFasilitasDaratTukstersus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_fasilitas_darat_tukstersus', function (Blueprint $table) {
            $table->id();
            $table->integer('id_fasilitas');
            $table->double('luas_darat');
            $table->string('perkantoran', 20);
            $table->integer('timbangan');
            $table->integer('tanki_timbu_cpo');
            $table->double('bengkel');
            $table->integer('uplc');
            $table->integer('tplb3');
            $table->integer('power_plan');
            $table->integer('tanki_bbm');
            $table->integer('tanki_air');
            $table->integer('refeneri');
            $table->integer('tanki_mfo');
            $table->integer('bangunan_reserve');
            $table->integer('cooling_tower');
            $table->integer('bangunan_utility');
            $table->integer('gardu_listrik_pln');
            $table->integer('tempat_penimbunan');
            $table->integer('kantor_d_pos');
            $table->integer('musholla_d_kantin');
            $table->integer('gudang_tertutup');
            $table->integer('gudang_terbuka');
            $table->integer('mess');
            $table->integer('kbkki');
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
