<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nospm', 18);
            $table->string('tglspm', 2);
            $table->string('blnspm', 2);
            $table->string('thnspm', 4);
            $table->string('kdmap', 6);
            $table->string('npwp', 15);
            $table->string('jumlah', 24);
            $table->timestamps();

            $table->foreign('kdmap')->references->('kdmap')->on('kdmap');
            $table->foreign('npwp')->references->('npwp')->on('masterwp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('spm');
    }
}
