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
            'products_groups',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('url');
                $table->string('image')->nullable();
                $table->string('image_alt');
                $table->string('bottom_text');
                $table->integer('parent_id')->unsigned()->index();
                $table->boolean('is_enabled');
                $table->index('url');
            }
        );

        Schema::table(
            'products',
            function (Blueprint $table) {
                $table->integer('group_id')->unsigned()->index();
                $table->foreign('group_id')->references('id')->on('products_groups')
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
        Schema::drop('products_groups');
    }

}
