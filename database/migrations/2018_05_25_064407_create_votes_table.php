<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            //Unique
            $table->increments('id');
            $table->unsignedInteger('owner_id');

            //others
            $table->string('name');
            /**
             * Vote can be:
             * - rigged : owner can make the conclusion despite the percentage
             * - not-rigged : the percentage determines the outcome
            */
            $table->string('type');
            $table->boolean('conclusion'); //The outcome
            $table->unsignedSmallInteger('percentage'); //According to the voters

            //polymorphic relationship
            $table->morphs('votable');

            //Record Metadata fields
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
        Schema::dropIfExists('votes');
    }
}
