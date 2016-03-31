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

        DB::table('product_tag')->insert([
            'tag_id' => 1,
            'product_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('product_tag')->insert([
            'tag_id' => 1,
            'product_id' => 2,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('product_tag')->insert([
            'tag_id' => 3,
            'product_id' => 3,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('product_tag')->insert([
            'tag_id' => 4,
            'product_id' => 4,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('product_tag')->insert([
            'tag_id' => 5,
            'product_id' => 6,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('product_tag')->insert([
            'tag_id' => 5,
            'product_id' => 7,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('product_tag')->insert([
            'tag_id' => 3,
            'product_id' => 5,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

//        factory(\App\Product::class, 20)
//            ->create()
//            ->each(function(\App\Product $category)
//            {
//                $category->sluggify();
//            });
    }
}
