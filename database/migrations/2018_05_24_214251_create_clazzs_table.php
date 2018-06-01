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
            $table->unsignedInteger('teacher_id');

            $table->string('teacher_name'); //if the teacher is not registered
            $table->string('teacher_email');
            $table->string('teacher_tell');

            //other
            $table->string('name');
            $table->string('abbreviation');
            $table->unsignedMediumInteger('color')->nullable();
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
