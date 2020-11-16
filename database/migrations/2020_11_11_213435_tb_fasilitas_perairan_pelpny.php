<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbFasilitasPerairanPelpny extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_fasilitas_perairan_pelpny', function (Blueprint $table) {
            $table->id();
            $table->integer('id_fasilitas');
            $table->string('type', 20);
            $table->string('ukuran', 20);
            $table->integer('breasting_dolphin');
            $table->integer('mooring_dolphin');
            $table->string('trestle', 20);
            $table->string('cause_way', 20);
            $table->string('catwalk', 20);
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
