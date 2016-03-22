<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SpecificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specifications')->insert([
            'product_id' => '6',
            'name' => 'Opslag',
            'value' => '500 GB',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('specifications')->insert([
            'product_id' => '6',
            'name' => 'RAM',
            'value' => '8 GB',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
