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
            'restaurant_id' => 3,
            'genre_id'=> 6,
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
            ],
            ]);
}
}
