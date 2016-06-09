<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokumenwpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumenwp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('npwp', 15)->unique();
            $table->string('noskt', 24);
            $table->string('nopkp', 24);
            $table->string('nocabutpkp', 24);
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
        Schema::drop('dokumenwp');
    }
}
