<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FiltersTableSeeder extends Seeder
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
    }
}
