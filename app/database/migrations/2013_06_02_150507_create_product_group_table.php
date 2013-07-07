<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductGroupTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'products_group',
            function (Blueprint $table) {
                $table->string('id');
                $table->string('name');
                $table->string('image')->nullable();
                $table->string('parent_id')->index();
                $table->boolean('is_enabled');
                $table->primary('id');
            }
        );

        Schema::table(
            'products',
            function (Blueprint $table) {
                $table->string('group_id')->index();
                $table->foreign('group_id')->references('id')->on('products_group')
                    ->onDelete('RESTRICT')
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
            'products',
            function (Blueprint $table) {
                $table->dropForeign('products_group_id_foreign');
                $table->dropColumn('group_id');
            }
        );
        Schema::drop('products_group');
    }

}
