<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filters')->insert([
            'name' => 'kleur',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name' => 'Nintendo 64',
            'price' => '12.34',
            'is_in_stock' => false,
            'description_long' => 'Long',
            'description_short' => 'Short',
            'category_id' => 4,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name' => 'Super NES',
            'price' => '12.34',
            'is_in_stock' => false,
            'description_long' => 'Long',
            'description_short' => 'Short',
            'category_id' => 4,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name' => 'NES',
            'price' => '12.34',
            'is_in_stock' => true,
            'description_long' => 'Long',
            'description_short' => 'Short',
            'category_id' => 4,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name' => 'Nintendo GameCube',
            'price' => '12.34',
            'is_in_stock' => true,
            'description_long' => 'Long',
            'description_short' => 'Short',
            'category_id' => 4,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name' => 'Nintendo Wii',
            'price' => '12.34',
            'is_in_stock' => false,
            'description_long' => 'Long',
            'description_short' => 'Short',
            'category_id' => 4,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name' => 'Nintendo Wii U',
            'price' => '12.34',
            'is_in_stock' => true,
            'description_long' => 'Long',
            'description_short' => 'Short',
            'category_id' => 4,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name' => 'PlayStation',
            'price' => '12.34',
            'is_in_stock' => false,
            'description_long' => 'Long',
            'description_short' => 'Short',
            'category_id' => 5,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name' => 'PlayStation 2',
            'price' => '12.34',
            'is_in_stock' => false,
            'description_long' => 'Long',
            'description_short' => 'Short',
            'category_id' => 5,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name' => 'PlayStation 3',
            'price' => '12.34',
            'is_in_stock' => false,
            'description_long' => 'Long',
            'description_short' => 'Short',
            'category_id' => 5,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name' => 'PlayStation 4',
            'price' => '12.34',
            'is_in_stock' => false,
            'description_long' => 'Long',
            'description_short' => 'Short',
            'category_id' => 5,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name' => 'Xbox',
            'price' => '12.34',
            'is_in_stock' => false,
            'description_long' => 'Long',
            'description_short' => 'Short',
            'category_id' => 6,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name' => 'Xbox 360',
            'price' => '12.34',
            'is_in_stock' => false,
            'description_long' => 'Long',
            'description_short' => 'Short',
            'category_id' => 6,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name' => 'Xbox One',
            'price' => '12.34',
            'is_in_stock' => false,
            'description_long' => 'Long',
            'description_short' => 'Short',
            'category_id' => 6,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('filter_product')->insert([
            'filter_id' => 1,
            'product_id' => 1,
            'value' => 'wit',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('filter_product')->insert([
            'filter_id' => 1,
            'product_id' => 2,
            'value' => 'zwart',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('filter_product')->insert([
            'filter_id' => 1,
            'product_id' => 3,
            'value' => 'wit',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('filter_product')->insert([
            'filter_id' => 1,
            'product_id' => 4,
            'value' => 'rood',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('filter_product')->insert([
            'filter_id' => 1,
            'product_id' => 5,
            'value' => 'rood',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
