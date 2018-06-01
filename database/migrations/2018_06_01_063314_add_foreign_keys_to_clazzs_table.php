<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToClazzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clazzs', function (Blueprint $table) {
            $table->foreign('owner_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('time_table_id')
                ->references('id')->on('time_tables')
                ->onDelete('cascade');

            $table->foreign('teacher_id')
                ->references('id')->on('users')
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
        Schema::table('clazzs', function (Blueprint $table) {
            $table->dropForeign('clazzs_owner_id_foreign');
            $table->dropForeign('clazzs_time_table_id_foreign');
            $table->dropForeign('clazzs_teacher_id_foreign');
        });
    }
}
