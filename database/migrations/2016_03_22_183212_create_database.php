<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('parent_id', false, true)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('parent_id')
                ->references('id')
                ->on('categories');
        });

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('price');
            $table->boolean('is_in_stock');
            $table->mediumText('description_short');
            $table->longText('description_long');
            $table->integer('category_id', false, true);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_uri');
            $table->string('annotation');
            $table->integer('product_id', false, true);
            $table->enum('image_type', ['thumbnail', 'detail']);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('product_id')
                ->references('id')
                ->on('products');
        });

        Schema::create('shipping_listings', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('city');
            $table->string('country');
            $table->string('postal_code');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->delete('cascade');
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->boolean('is_payment_complete');
            $table->double('discount');
            $table->double('price');
            $table->integer('shipping_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('shipping_id')
                ->references('id')
                ->on('shipping_listings');
        });

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

        Schema::create('filters', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('product_filter', function(Blueprint $table) {
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



        Schema::create('specifications', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->string('name');
            $table->string('value');
            $table->timestamps();

            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->delete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
        Schema::drop('product_images');
        Schema::drop('products');
        Schema::drop('order_products');
        Schema::drop('orders');
        Schema::drop('product_filter');
        Schema::drop('filters');
        Schema::drop('shipping_listings');
        Schema::drop('specifications');
    }
}
