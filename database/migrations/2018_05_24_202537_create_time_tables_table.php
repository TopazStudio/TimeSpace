<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * This will be sort of a time_space collection.
         * Even when the user add his or her own time space (event,class,workout),
         * the time_space will be added to a personal timetable.
        */
        Schema::create('time_tables', function (Blueprint $table) {
            //unique
            $table->increments('id');
            $table->unsignedInteger('owner_id'); //the person who created it
            $table->unsignedInteger('group_id'); //the group its in

            //others
            $table->string('name');
            /**
             * timetable can be:
             * - personal
             * - exam timetable
             * - cat timetable
             * - organization schedule
             * - workout routine
            */
            $table->string('type');
            /**
             * Timetable can be:
             * 1) active : currently in use
             * 2) inactive : not in use
            */
            $table->unsignedInteger('status');
            $table->unsignedInteger('color');
            $table->unsignedInteger('priority');

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
        Schema::dropIfExists('time_tables');
    }
}
