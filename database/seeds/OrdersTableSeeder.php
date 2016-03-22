<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'user_id' => 1,
            'is_payment_complete' => false,
            'discount' => 0,
            'price' => 0,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('order_product')->insert([
            'order_id' => 1,
            'product_id' => 1,
            'quantity' => 2,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('order_product')->insert([
            'order_id' => 1,
            'product_id' => 3,
            'quantity' => 4,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('order_product')->insert([
            'order_id' => 1,
            'product_id' => 7,
            'quantity' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
