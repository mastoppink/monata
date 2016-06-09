<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKantorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kantor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kpp')->unique();
            $table->string('nama', 100);
            $table->text('alamat');
            $table->string('kanwil', 3);
            $table->string('telepon', 12);
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
        Schema::drop('kantor');
    }
}
