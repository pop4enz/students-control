<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balls', function (Blueprint $table) {
            $table->increments('Ball_id');
            $table->unsignedtinyInteger('semester');
            $table->unsignedInteger('Stud_id');
            $table->unsignedInteger('Pred_id');
            $table->unsignedtinyInteger('Ball');
            $table->foreign('Stud_id')->references('Stud_id')->on('studs');
            $table->foreign('Pred_id')->references('Pred_id')->on('predmets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balls');
    }
}
