<?php

use Illuminate\Database\Seeder;



class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
            'food' => 'カレーうどん',
            'price' => 600,
            'user_id'=> 6,
            'restaurant_id' => 6,
            'genre_id'=> 6,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
            ],
          ]);
          DB::table('menus')->insert([
            [
            'food' => '醤油ラーメン',
            'price' => 700,
            'user_id'=> 7,
            'restaurant_id' => 7,
            'genre_id'=> 7,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
            ],
          ]);
          DB::table('menus')->insert([
            [
            'food' => '唐揚げ定食',
            'price' => 800,
            'user_id'=> 8,
            'restaurant_id' => 8,
            'genre_id'=> 8,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
            ],
          ]);
          DB::table('menus')->insert([
            [
            'food' => 'とんかつ定食',
            'price' => 900,
            'user_id'=> 9,
            'restaurant_id' => 9,
            'genre_id'=> 9,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
            ],
          ]);
          DB::table('menus')->insert([
            [
            'food' => 'パスタ',
            'price' => 750,
            'user_id'=> 10,
            'restaurant_id' => 10,
            'genre_id'=> 10,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
            ],
          ]);
    }
    

}

