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
            'name' => 'rood',
            'created_at' => Carbon::now()->toDateTimeString(),
            'slug' => 'rood',
        ]);

        DB::table('tags')->insert([
            'name' => 'zwart',
            'created_at' => Carbon::now()->toDateTimeString(),
            'slug' => 'rood',
        ]);

        DB::table('tags')->insert([
            'name' => 'geel',
            'created_at' => Carbon::now()->toDateTimeString(),
            'slug' => 'rood',
        ]);
    }
}
