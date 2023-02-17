<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id('id_pemesanan');
            $table->string('no_polis');
            $table->string('merk');
            $table->string('nama_customer');
            $table->string('alamat_customer');
            $table->string('no_customer');
             $table->foreignId('spare_part_id');
             $table->foreign('spare_part_id')->references('id_spare_part')->on('spare_part');
             $table->enum('status', ['waiting','confirmed' ])->default('waiting');
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
        Schema::dropIfExists('pemesanan');
    }
}
