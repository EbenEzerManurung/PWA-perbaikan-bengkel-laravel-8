<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyLayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_layanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_customer');
            $table->string('tingkat_kepuasan');
            $table->string('komentar');
            $table->foreignId('pemesanan_id');
            $table->foreign('pemesanan_id')->references('id_pemesanan')->on('pemesanan');
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
        Schema::dropIfExists('survey_layanan');
    }
}
