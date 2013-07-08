<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'products',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('title');
                $table->string('url');
                $table->string('meta_keywords');
                $table->string('meta_description');
                $table->text('description');
                $table->string('image');
                $table->integer('cost');
                $table->integer('count');
                $table->timestamps();
                $table->index('url');
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
        Schema::drop('products');
    }

}