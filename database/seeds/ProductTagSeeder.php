<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_tag')->insert([
            'tag_id'     => \App\Tag::all()->random(1)->id,
            'product_id' => \App\Product::whereName('NES')->first()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('product_tag')->insert([
            'tag_id'     => \App\Tag::all()->random(1)->id,
            'product_id' => \App\Product::whereName('Super NES')->first()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('product_tag')->insert([
            'tag_id'     => \App\Tag::all()->random(1)->id,
            'product_id' => \App\Product::whereName('PlayStation')->first()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('product_tag')->insert([
            'tag_id'     => \App\Tag::all()->random(1)->id,
            'product_id' => \App\Product::whereName('Xbox')->first()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('product_tag')->insert([
            'tag_id'     => \App\Tag::all()->random(1)->id,
            'product_id' => \App\Product::whereName('Xbox One')->first()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('product_tag')->insert([
            'tag_id'     => \App\Tag::all()->random(1)->id,
            'product_id' => \App\Product::whereName('Nintendo Wii')->first()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('product_tag')->insert([
            'tag_id'     => \App\Tag::all()->random(1)->id,
            'product_id' => \App\Product::whereName('The Fast and the Furious')->first()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('product_tag')->insert([
            'tag_id'     => \App\Tag::all()->random(1)->id,
            'product_id' => \App\Product::whereName('The Fast and the Furious: Tokyo Drift')->first()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
