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
        $forUser = \App\User::first()->id;

        DB::table('orders')->insert([
            'user_id'             => $forUser,
            'is_payment_complete' => false,
            'discount'            => 0,
            'price'               => 0,
            'created_at'          => Carbon::now()->toDateTimeString(),
        ]);

        $forOrder = \App\Order::first()->id;

        $products = \App\Product::all()->random(4);

        foreach($products as $product)
        {
            DB::table('order_product')->insert([
                'order_id'   => $forOrder,
                'product_id' => $product->id,
                'quantity'   => random_int(1, 10),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
        }
    }
}
