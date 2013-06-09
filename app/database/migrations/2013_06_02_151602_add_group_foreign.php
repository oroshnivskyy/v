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
                $table->string('group_id')->nullable()->index();
                $table->foreign('group_id')->references('id')->on('product_group')
                    ->onDelete('SET NULL')
                    ->onUpdate('CASCADE');
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
                $table->dropForeign('product_group_id_foreign');
                $table->dropColumn('group_id');
            }
        );
    }

}