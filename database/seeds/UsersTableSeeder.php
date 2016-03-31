<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'tom',
            'email' => 'tom@mail.com',
            'password' => bcrypt('wachtwoord'),
            'role' => 'admin',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'name' => 'sander',
            'email' => 'sander@mail.com',
            'password' => bcrypt('wachtwoord'),
            'role' => 'admin',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'name' => 'gebruiker',
            'email' => 'gebruiker@mail.com',
            'password' => bcrypt('wachtwoord'),
            'role' => 'normal',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
