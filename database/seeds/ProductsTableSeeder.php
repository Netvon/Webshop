<?php

use App\Category;
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
        $nintendo = \App\Category::whereName('Nintendo')->first()->id;
        $sony = \App\Category::whereName('Sony')->first()->id;
        $microsoft = \App\Category::whereName('Microsoft')->first()->id;

//        dd($nintendo, $sony, $microsoft);

        DB::table('products')->insert([
            'name'              => 'Nintendo 64',
            'price'             => '12.34',
            'is_in_stock'       => false,
            'description_long'  => 'Long',
            'description_short' => 'Short',
            'category_id'       => $nintendo,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'Super NES',
            'price'             => '12.34',
            'is_in_stock'       => false,
            'description_long'  => 'Long',
            'description_short' => 'Short',
            'category_id'       => $nintendo,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'NES',
            'price'             => '12.34',
            'is_in_stock'       => true,
            'description_long'  => 'Long',
            'description_short' => 'Short',
            'category_id'       => $nintendo,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'Nintendo GameCube',
            'price'             => '12.34',
            'is_in_stock'       => true,
            'description_long'  => 'Long',
            'description_short' => 'Short',
            'category_id'       => $nintendo,
            'created_at'        => Carbon::now()->toDateTimeString(),
            'slug'              => str_slug('Nintendo GameCube'),
        ]);

        DB::table('products')->insert([
            'name'              => 'Nintendo Wii',
            'price'             => '12.34',
            'is_in_stock'       => false,
            'description_long'  => 'Long',
            'description_short' => 'Short',
            'category_id'       => $nintendo,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'Nintendo Wii U',
            'price'             => '12.34',
            'is_in_stock'       => true,
            'description_long'  => 'Long',
            'description_short' => 'Short',
            'category_id'       => $nintendo,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'PlayStation',
            'price'             => '12.34',
            'is_in_stock'       => false,
            'description_long'  => 'Long',
            'description_short' => 'Short',
            'category_id'       => 5,
            'created_at'        => Carbon::now()->toDateTimeString(),
            'slug'              => str_slug('PlayStation'),
        ]);

        DB::table('products')->insert([
            'name'              => 'PlayStation 2',
            'price'             => '12.34',
            'is_in_stock'       => false,
            'description_long'  => 'Long',
            'description_short' => 'Short',
            'category_id'       => $sony,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'PlayStation 3',
            'price'             => '12.34',
            'is_in_stock'       => false,
            'description_long'  => 'Long',
            'description_short' => 'Short',
            'category_id'       => $sony,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'PlayStation 4',
            'price'             => '12.34',
            'is_in_stock'       => false,
            'description_long'  => 'Long',
            'description_short' => 'Short',
            'category_id'       => $sony,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'Xbox',
            'price'             => '12.34',
            'is_in_stock'       => false,
            'description_long'  => 'Long',
            'description_short' => 'Short',
            'category_id'       => $microsoft,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'Xbox 360',
            'price'             => '12.34',
            'is_in_stock'       => false,
            'description_long'  => 'Long',
            'description_short' => 'Short',
            'category_id'       => $microsoft,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('products')->insert([
            'name'              => 'Xbox One',
            'price'             => '12.34',
            'is_in_stock'       => false,
            'description_long'  => 'Long',
            'description_short' => 'Short',
            'category_id'       => $microsoft,
            'created_at'        => Carbon::now()->toDateTimeString(),
        ]);

//        dd('hoi');

        \App\Product::each(function (\App\Product $product) {
            $product->sluggify(true);
            $product->save();
        });

//        factory(\App\Product::class, 20)
//            ->create()
//            ->each(function(\App\Product $category)
//            {
//                $category->sluggify();
//            });
    }
}
