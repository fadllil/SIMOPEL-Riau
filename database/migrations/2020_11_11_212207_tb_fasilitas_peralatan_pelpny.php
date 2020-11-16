<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbFasilitasPeralatanPelpny extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_fasilitas_peralatan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_fasilitas');
            $table->string('hmc', 20);
            $table->string('terminal_tractor', 20);
            $table->string('st40', 20);
            $table->string('primer_movers', 20);
            $table->string('flattop_trailer', 20);
            $table->string('trailer20', 20);
            $table->string('flexible_hose', 20);
            $table->integer('pipe_line');
            $table->string('loader', 20);
            $table->string('shore_crane', 20);
            $table->string('excavator', 20);
            $table->string('dump_truck', 20);
            $table->string('forklift', 20);
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
