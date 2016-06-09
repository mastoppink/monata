<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMpnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpn', function (Blueprint $table) {
            $table->string('ntpnmap', 22)->unique();
            $table->string('tglbyr', 2);
            $table->string('blnbyr', 2);
            $table->string('thnbyr', 4);
            $table->string('mspj', 2);
            $table->string('thpj', 2);
            $table->string('jumlah', 24);
            $table->string('bank', 100);
            $table->string('idbilling', 15);
            $table->string('ntpn', 16);
            $table->string('npwp', 15);
            $table->string('kdmap', 6);
            $table->string('kjs', 3);
            $table->string('skssp', 15);
            $table->timestamps();

            $table->foreign('kdmap')->references('kdmap')->on('kdmap');
            $table->foreign('kjs')->references('kjs')->on('kdmap');
            $table->foreign('skssp')->references('noskp')->on('skp');
            $table->foreign('skssp')->references('nostp')->on('stp');
            $table->foreign('npwp')->references('npwp')->on('masterwp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mpn');
    }
}
