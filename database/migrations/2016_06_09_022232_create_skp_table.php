<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skp', function (Blueprint $table) {
            $table->string('noskp', 15)->unique();
            $table->string('npwp', 15);
            $table->string('nilai', 24);
            $table->string('tglskp', 2);
            $table->string('blnskp', 2);
            $table->string('thnskp', 4);
            $table->string('status', 2);
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
        Schema::drop('skp');
    }
}
