<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbFasilitasSaranaPelpny extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_fasilitas_sarana', function (Blueprint $table) {
            $table->id();
            $table->integer('id_fasilitas');
            $table->text('dlkr');
            $table->text('dlkp');
            $table->integer('lampu_suar');
            $table->integer('handy_talky');
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
