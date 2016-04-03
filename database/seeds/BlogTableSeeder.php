<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'title'      => 'Aanmaken laravel en basic setup maken',
            'body'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nunc ut nisi porta lacinia. Etiam gravida dolor a magna bibendum, eget suscipit turpis varius. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras luctus, mi in tristique bibendum, lorem magna dignissim purus, id ultricies sem lacus nec lacus. Curabitur et dapibus lacus. Maecenas scelerisque augue ut libero luctus, a egestas diam condimentum. In malesuada odio sed arcu varius, non auctor lorem fermentum. Nulla suscipit tellus orci, in convallis tortor laoreet quis. Fusce a erat non massa maximus gravida eu tempor tellus. Aliquam fringilla interdum ligula. Praesent sit amet justo nec enim molestie ultrices ac vel lacus. Nunc feugiat tortor vehicula est finibus vulputate. Proin nec pellentesque turpis, ac convallis nulla. Nunc non dui sit amet nulla convallis ultrices. Donec egestas ante vitae consectetur congue. Nulla vitae mauris dui. In tincidunt eleifend tellus consequat pharetra.',
            'user_id'    => \App\User::whereName('tom')->first()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('blogs')->insert([
            'title'      => 'Homepage',
            'body'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nunc ut nisi porta lacinia. Etiam gravida dolor a magna bibendum, eget suscipit turpis varius. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras luctus, mi in tristique bibendum, lorem magna dignissim purus, id ultricies sem lacus nec lacus. Curabitur et dapibus lacus. Maecenas scelerisque augue ut libero luctus, a egestas diam condimentum. In malesuada odio sed arcu varius, non auctor lorem fermentum. Nulla suscipit tellus orci, in convallis tortor laoreet quis. Fusce a erat non massa maximus gravida eu tempor tellus. Aliquam fringilla interdum ligula. Praesent sit amet justo nec enim molestie ultrices ac vel lacus. Nunc feugiat tortor vehicula est finibus vulputate. Proin nec pellentesque turpis, ac convallis nulla. Nunc non dui sit amet nulla convallis ultrices. Donec egestas ante vitae consectetur congue. Nulla vitae mauris dui. In tincidunt eleifend tellus consequat pharetra.',
            'user_id'    => \App\User::whereName('sander')->first()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);


        \App\Blog::each(function (\App\Category $category) {
            $category->sluggify();
            $category->save();
        });
    }
}