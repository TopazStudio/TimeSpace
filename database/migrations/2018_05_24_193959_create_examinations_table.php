<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examinations', function (Blueprint $table) {
            //unique
            $table->increments('id');
            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('subject_id'); //The subject this examination is for.
            $table->unsignedInteger('time_table_id'); //The timetable this examination is for

            //other
            $table->string('name');
            /**
             * Exam can be a:
             * - cat
             * - rat
             * - end-terms
             * - mid-terms
             * - any other type
            */
            $table->string('type');
            $table->unsignedMediumInteger('color')->nullable();
            $table->string('description')->nullable();
            $table->longText('note')->nullable();

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
        Schema::dropIfExists('examinations');
    }
}
