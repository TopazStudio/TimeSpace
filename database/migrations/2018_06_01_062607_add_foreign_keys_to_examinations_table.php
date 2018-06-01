<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('examinations', function (Blueprint $table) {
            $table->foreign('owner_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('subject_id')
                ->references('id')->on('clazzs')
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
        Schema::table('examinations', function (Blueprint $table) {
            $table->dropForeign('examinations_owner_id_foreign');
            $table->dropForeign('examinations_subject_id_foreign');
            $table->dropForeign('examinations_time_table_id_foreign');
        });
    }
}
