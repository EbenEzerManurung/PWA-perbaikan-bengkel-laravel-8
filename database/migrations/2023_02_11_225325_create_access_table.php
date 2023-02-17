<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access', function (Blueprint $table) {
            $table->id();
            $table->integer('user');
            $table->boolean('kelola_akun');
            $table->boolean('spare_part');
            $table->boolean('pemesanan');
            $table->boolean('perintah_perbaikan');
            $table->boolean('perbaikan');
            $table->boolean('survey_layanan');
            $table->timestamps();
            Schema::defaultStringLength(191);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('access');
    }
}
