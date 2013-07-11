<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateProductsGroupsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products_groups', function(Blueprint $table) {
                $table->string('title');
                $table->string('meta_keywords');
                $table->string('meta_description');
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
        Schema::table('products_groups', function(Blueprint $table) {
                $table->dropColumn('title');
                $table->dropColumn('meta_keywords');
                $table->dropColumn('meta_description');
            });
    }

}
