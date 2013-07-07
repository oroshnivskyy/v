<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductImagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'product_images',
            function (Blueprint $table) {
                $table->increments('id');
                $table->integer('product_id')->unsigned()->index();
                $table->string('filename');
                $table->string('src');
                $table->timestamps();
                $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('RESTRICT')
                    ->onUpdate('CASCADE');
        }
        );
        
        Schema::table('products', function(Blueprint $table){
                $table->dropColumn('image');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function(Blueprint $table){
                $table->string('image')->nullable();
            });

        Schema::drop('product_images');
    }

}
