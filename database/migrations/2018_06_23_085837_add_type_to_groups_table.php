<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeToGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('groups', function (Blueprint $table) {
            /**
             * - PUBLIC : essentially anyone can join
             * - PRIVATE : joining requires permission from leader
             * - HIDDEN : one cannot completely see the group or join. Only invitation
            */
            $table->string('group_type')->default('PRIVATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('groups', function (Blueprint $table) {
            $table->dropColumn('group_type');
        });
    }
}
