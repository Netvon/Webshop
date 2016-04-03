<?php

use App\Product;
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
        $wii_u = Product::whereName('Nintendo Wii U')->first()->id;
        $xbox_one = Product::whereName('Xbox One')->first()->id;
        $ps4 = Product::whereName('PlayStation 4')->first()->id;

        DB::table('specifications')->insert([
            'product_id' => $ps4,
            'name' => 'Storage',
            'value' => '1 TB',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('specifications')->insert([
            'product_id' => $xbox_one,
            'name' => 'Storage',
            'value' => '500 GB',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        
        DB::table('specifications')->insert([
            'product_id' => $wii_u,
            'name' => 'Storage',
            'value' => '500 GB',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('specifications')->insert([
            'product_id' => $wii_u,
            'name' => 'RAM',
            'value' => '4 GB',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('specifications')->insert([
            'product_id' => $xbox_one,
            'name' => 'RAM',
            'value' => '8 GB',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('specifications')->insert([
            'product_id' => $wii_u,
            'name' => 'RAM',
            'value' => '8 GB',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
