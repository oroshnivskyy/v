<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddGroupForeign extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'product',
            function (Blueprint $table) {
                $table->integer('group_id')->unsigned()->index();
                $table->foreign('group_id', 'group_foreign_key')->references('id')->on('product_group')
                    ->on_delete('restrict')
                    ->on_update('cascade');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'product',
            function (Blueprint $table) {
                $table->dropForeign('group_foreign_key');
                $table->dropColumn('group_id');
            }
        );
    }

}