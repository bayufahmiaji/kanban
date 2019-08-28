<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatelistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_list', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_project');
            $table->foreign('id_project')->references('id')->on('projects')->ondelete('cascade')->onupdate('cascade');
            $table->String('nama');
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
        Schema::dropIfExists('tb_list');
    }
}