<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TagsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SpecificationsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(ProductTagSeeder::class);
        $this->call(BlogTableSeeder::class);
    }
}
