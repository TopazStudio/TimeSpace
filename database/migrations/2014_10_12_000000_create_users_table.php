<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //unique
            $table->increments('id');

            //others

            //names. Useful for timetable abbreviations
            $table->string('first_name');
            $table->string('second_name');
            $table->string('surname');
            /**
             * - mr
             * - miss
             * - sir
             * - prof
             * - mrs
             * - dr
            */
            $table->string('name_prefix')->nullable();
            /**
             * Will be used for availability.
             * - busy
             * - free
            */
            $table->unsignedSmallInteger('status');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('tel');

            //metadata
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
