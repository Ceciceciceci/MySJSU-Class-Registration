<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassestakenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classestaken', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('id')->unsigned()->index(); //student id
            $table->integer('section_id')->unsigned()->nullable();
            $table->integer('cid');
            $table->string('semester');
            $table->string('year');
            $table->string('grade')->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('classesTaken');
    }
}
