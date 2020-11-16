<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbFasilitasPerairanTukstersus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_fasilitas_perairan_tukstersus', function (Blueprint $table) {
            $table->id();
            $table->integer('id_fasilitas');
            $table->string('type', 20);
            $table->double('ukuran');
            $table->integer('breasting_dolphin');
            $table->integer('mooring_dolphin');
            $table->double('trestle');
            $table->double('cause_way');
            $table->double('catwalk');
            $table->integer('kontruksi');
            $table->integer('peruntukan');
            $table->double('kedalaman');
            $table->string('koordinat', 50);
            $table->integer('fender');
            $table->integer('bollar');
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
