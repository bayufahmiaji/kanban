<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksteamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasksteam', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_list');
            $table->String('nama');
            $table->String('deskripsi')->nullable();
            $table->String('taskhandle');
            $table->Date('taskstart');
            $table->Date('taskend');
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
        Schema::dropIfExists('tasksteam');
    }
}
