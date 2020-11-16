<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbSewaPerairan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_sewa_perairan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tukstersus');
            $table->String('tuks_tersus', 50);
            $table->String('no_perjanjian', 50);
            $table->date('awal');
            $table->date('akhir');
            $table->string('luas_perairan', 50);
            $table->string('tarif', 50);
            $table->float('pungutan');
            $table->float('denda');
            $table->float('total');
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
