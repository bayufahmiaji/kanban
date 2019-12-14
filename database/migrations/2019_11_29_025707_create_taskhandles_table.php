<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskhandlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taskhandles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_user');
            $table->Integer('id_task');
            $table->Integer('id_project');
            $table->String('nama_user');
            $table->String('nama_project');
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
        Schema::dropIfExists('taskhandles');
    }
}
