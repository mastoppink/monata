<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nostp', 15);
            $table->string('mspj', 2);
            $table->string('thpj', 4);
            $table->string('tglstp', 2);
            $table->string('blnstp', 2);
            $table->string('thnstp', 4);
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
        Schema::drop('stp');
    }
}
