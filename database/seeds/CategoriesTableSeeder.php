<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('categories')->insert([
            'name' => 'Consoles',
            'description' => 'Een beschrijving',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        //2
        DB::table('categories')->insert([
            'name' => 'Video & Film',
            'description' => 'Een beschrijving',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        //3
        DB::table('categories')->insert([
            'name' => 'Audio',
            'description' => 'Een beschrijving',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        //4
        DB::table('categories')->insert([
            'name' => 'Nintendo',
            'description' => 'Een beschrijving',
            'parent_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        //5
        DB::table('categories')->insert([
            'name' => 'Sony',
            'description' => 'Een beschrijving',
            'parent_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        //6
        DB::table('categories')->insert([
            'name' => 'Microsoft',
            'description' => 'Een beschrijving',
            'parent_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        //7
        DB::table('categories')->insert([
            'name' => 'Dvd\'s',
            'description' => 'Een beschrijving',
            'parent_id' => 2,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        //8
        DB::table('categories')->insert([
            'name' => 'Blu-rays',
            'description' => 'Een beschrijving',
            'parent_id' => 2,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        //9
        DB::table('categories')->insert([
            'name' => 'Tv-series',
            'description' => 'Een beschrijving',
            'parent_id' => 2,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
