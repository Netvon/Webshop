<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->integer('order_id')->unsigned()->index();
            $table->integer('product_id')->unsigned()->index();
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->delete('cascade');

            $table->foreign('order_id')
                ->references('id')
                ->on('orders')
                ->delete('cascade');

            $table->primary(['order_id', 'product_id']);
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
