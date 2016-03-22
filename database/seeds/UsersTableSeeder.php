<?php

use Illuminate\Database\Seeder;

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
        ]);

        DB::table('users')->insert([
            'name' => 'sander',
            'email' => 'sander@mail.com',
            'password' => bcrypt('wachtwoord'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'gebruiker',
            'email' => 'gebruiker@mail.com',
            'password' => bcrypt('wachtwoord'),
            'role' => 'normal',
        ]);
    }
}
