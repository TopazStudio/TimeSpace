<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClazzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clazzs', function (Blueprint $table) {
            //unique
            $table->increments('id');
            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('time_table_id'); //The timetable this examination is for
            /**
             * If the teacher is not registered then we can create a fake teacher-user model
             * and send an invitation link to the teacher. When accepted the teacher will be
             * loaded into the model easily.
            */
            $table->unsignedInteger('teacher_id');

            //other
            $table->string('name');
            $table->string('abbreviation')->nullable();
            $table->string('note')->nullable();
            $table->string('color')->nullable();
            $table->string('description')->nullable();

            //metadata
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
        Schema::dropIfExists('clazzs');
    }
}
