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
            'product_group',
            function (Blueprint $table) {
                $table->string('id');
                $table->string('name');
                $table->string('image')->nullable();
                $table->string('parent_id')->nullable()->index();
                $table->boolean('is_enabled');
                $table->primary('id');
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
        Schema::drop('product_group');
    }

}
