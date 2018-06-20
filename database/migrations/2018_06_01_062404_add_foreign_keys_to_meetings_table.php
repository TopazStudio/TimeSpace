<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meetings', function (Blueprint $table) {
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
        Schema::table('meetings', function (Blueprint $table) {
            $table->dropForeign('meetings_owner_id_foreign');
            $table->dropForeign('meetings_time_table_id_foreign');
        });
    }
}
