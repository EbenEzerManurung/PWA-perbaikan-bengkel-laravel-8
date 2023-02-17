<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerintahPerbaikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perintah_perbaikan', function (Blueprint $table) {
            $table->id('id_perintah');
            $table->string('nama_mekanik');
             $table->integer('qty');
             $table->foreignId('pemesanan_id');
             $table->foreign('pemesanan_id')->references('id_pemesanan')->on('pemesanan');
             $table->enum('status', ['waiting', 'confirmed'])->default('waiting');;
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
        Schema::dropIfExists('perintah_perbaikan');
    }
}
