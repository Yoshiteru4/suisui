<?php

use Illuminate\Database\Seeder;
use App\Menu;



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
            'food' => 'うどん',
            'price' => 400,
            'user_id'=> 4,
            'restaurant_id' => 4,
            'genre_id'=> 4,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
            ],
          ]);
          DB::table('menus')->insert([
            [
            'food' => 'ラーメン',
            'price' => 7000,
            'user_id'=> 5,
            'restaurant_id' => 5,
            'genre_id'=> 5,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
            ],
          ]);
    }
    

}

