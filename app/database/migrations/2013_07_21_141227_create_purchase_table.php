<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePurchaseTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase', function(Blueprint $table) {
            $table->increments('id');
            $table->string('username', 255);
            $table->string('phone', 255);
            $table->text('note', 2000);
            $table->integer('product_id')->unsigned()->index();
            $table->string('delivery', 50);
            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('purchase');
    }

}
