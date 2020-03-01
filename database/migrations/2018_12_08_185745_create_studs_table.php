<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studs', function (Blueprint $table) {
            $table->increments('stud_id');
            $table->string('f_name','25');
            $table->string('l_name','25');
            $table->string('imgpath')->default('img/defstudent.jpg');
            $table->unsignedInteger('Group_id');
            $table->unsignedInteger('Form_id');
            $table->foreign('Group_id')->references('Group_id')->on('groups');
            $table->foreign('Form_id')->references('Form_id')->on('forms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studs');
    }
}
