<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilwpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilwp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('npwp', 15)->unique();
            $table->string('tgldaftar', 10);
            $table->string('tglpindah', 10);
            $table->string('tgllahir', 10);
            $table->string('tglcabutpkp', 10);
            $table->string('nama', 100);
            $table->text('alamatsistem');
            $table->text('alamatsurvey');
            $table->string('kota', 100);
            $table->string('kodepos', 5);
            $table->string('telepon', 12);
            $table->string('fax', 12);
            $table->string('handphone', 13);
            $table->string('nomoridentitas', 16);
            $table->string('kelurahan', 100);
            $table->string('kecamatan', 100);
            $table->string('provinsi', 100);
            $table->string('onwork', 1);
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
        Schema::drop('profilwp');
    }
}
