<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKdmapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kdmap', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kdmap', 6);
            $table->string('kjs', 3);
            $table->string('sektor', 2);
            $table->text('uraian');
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
        Schema::drop('kdmap');
    }
}
