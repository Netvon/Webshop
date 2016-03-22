<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilterProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filter_product', function(Blueprint $table) {
            $table->integer('filter_id')->unsigned()->index();
            $table->integer('product_id')->unsigned()->index();
            $table->string('value');
            $table->timestamps();

            $table->foreign('filter_id')
                ->references('id')
                ->on('filters')
                ->delete('cascade');

            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->delete('cascade');

            $table->primary(['filter_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
