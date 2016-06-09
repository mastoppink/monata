<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip', 9)->unique();
            $table->string('nip', 18);
            $table->string('jabatan', 2);
            $table->string('seksi', 2);
            $table->string('kantor', 3);
            $table->timestamps();

            $table->foreign('kantor')->references('kpp')->on('kantor');
            $table->foreign('jabatan')->references('kode')->on('jabatan');
            $table->foreign('seksi')->references('kode')->on('seksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pegawai');
    }
}
