<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenpenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renpen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kdmap', 6);
            $table->string('bulan', 2);
            $table->string('rencana', 24);
            $table->string('pj', 9);
            $table->timestamps();

            $table->foreign('kdmap')->references('kdmap')->on('kdmap');
            $table->foreign('pj')->references('ip')->on('pegawai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('renpen');
    }
}
