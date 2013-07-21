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
            $table->string('username', 255)->default('');
            $table->string('phone', 255)->default('');
            $table->text('note', 2000)->default('');
            $table->integer('product_id')->unsigned()->index();
            $table->string('delivery', 50)->default('');
            $table->boolean('called')->default(false);
            $table->boolean('success')->default(false);
            $table->string('comment')->default('');
            
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
