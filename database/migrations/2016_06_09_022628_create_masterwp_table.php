<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterwpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterwp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('npwp', 15)->unique();
            $table->string('jeniswp', 2);
            $table->string('bentukhukum', 2);
            $table->string('status', 2);
            $table->string('klu', 5);
            $table->string('metodehitung', 2);
            $table->string('matauang', 2);
            $table->string('pj', 9);
            $table->string('js', 9);
            $table->timestamps();

            $table->foreign('npwp')->references('npwp')->on('profilwp');
            $table->foreign('npwp')->references('npwp')->on('dokumenwp');
            $table->foreign('status')->references('kode')->on('statuswp');
            $table->foreign('klu')->references('kode')->on('klu');
            $table->foreign('bentukhukum')->references('kode')->on('bentukhukum');
            $table->foreign('jeniswp')->references('kode')->on('jeniswp');
            $table->foreign('npwp')->references('npwp')->on('skp');
            $table->foreign('pj')->references('ip')->on('pegawai');
            $table->foreign('js')->references('ip')->on('pegawai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('masterwp');
    }
}
