<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerbaikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perbaikan', function (Blueprint $table) {
            $table->id('id_perbaikan');
            $table->string('nama_mekanik');
            $table->enum('status', ['process', 'finished'])->default('process');;
            $table->foreignId('perintah_id');
             $table->foreign('perintah_id')->references('id_perintah')->on('perintah_perbaikan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perbaikan');
    }
}
