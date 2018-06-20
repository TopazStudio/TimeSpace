<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('groups', function (Blueprint $table) {
            $table->foreign('owner_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('organization_id')
                ->references('id')->on('organizations')
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
        Schema::table('groups', function (Blueprint $table) {
            $table->dropForeign('groups_owner_id_foreign');
            $table->dropForeign('groups_organization_id_foreign');
        });
    }
}
