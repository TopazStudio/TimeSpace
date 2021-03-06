<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFollowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_followers', function (Blueprint $table) {
            //unique
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('follower_id');

            /**
             * State of the accepted follower request
             * 2 - PUBLIC
             * 1 - ACCEPTED
             * 0 - REJECTED
            */
            $table->unsignedSmallInteger('accepted')->default(0);

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
        Schema::dropIfExists('user_followers');
    }
}
