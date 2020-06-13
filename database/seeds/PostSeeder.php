<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('posts')->insert([
           ['user_id'=>1, 'title'=>'first title', 'content'=>'first content'],
           ['user_id'=>1, 'title'=>'second title', 'content'=>'second content'],

        ]);
    }
}
