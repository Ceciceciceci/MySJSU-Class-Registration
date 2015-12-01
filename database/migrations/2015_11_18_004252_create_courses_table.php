<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course');
            $table->integer("seats", false, true);
            $table->timestamps();
        });*/
        Schema::create('courses', function (Blueprint $table) {
<<<<<<< HEAD
            $table->integer('class')->unsigned()->index();
            $table->integer('cid')->unsigned()->index();//->nullable(); // class id
=======
            $table->integer('class');
            $table->integer('id')->unsigned()->nullable();
            $table->integer('cid')->unsigned()->nullable(); // class id
>>>>>>> ded2ae90b901d7e08a70e69413be9f41b3af5d9c
            //$table->foreign('cid')->references('cid')->on('requisites');
            $table->string('subject');
            $table->string('courseNumber');
            $table->string('courseName');
            $table->string('section1');
            $table->string('section2');
            $table->string('days');
            $table->string('startTime'); // what format?
            $table->string('endTime'); // what format?
            $table->string('room');
            $table->string('instructor');
            $table->integer('iid')->nullable(); // instructor id
            $table->string('meetingDates');
            $table->integer("seats", false, true)->nullable()
                                                 ->default(35);
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
        Schema::drop('courses');
    }
}
