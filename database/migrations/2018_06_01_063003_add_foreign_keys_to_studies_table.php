<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('studies', function (Blueprint $table) {
            $table->foreign('owner_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('time_table_id')
                ->references('id')->on('time_tables')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('studies', function (Blueprint $table) {
            $table->dropForeign('workouts_owner_id_foreign');
            $table->dropForeign('workouts_time_table_id_foreign');
        });
    }
}
