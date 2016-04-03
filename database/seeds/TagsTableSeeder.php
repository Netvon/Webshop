<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'red',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('tags')->insert([
            'name' => 'black',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('tags')->insert([
            'name' => 'yellow',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('tags')->insert([
            'name' => 'blue',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('tags')->insert([
            'name' => 'white',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('tags')->insert([
            'name' => 'green',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        factory(\App\Tag::class, 20)
            ->create();

        \App\Tag::each(function (\App\Tag $tag) {
            $tag->sluggify();
            $tag->save();
        });
    }
}
