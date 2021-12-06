<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $table->increments('id');
        //     $table->string('name');
        //     $table->integer('telenumber');
        //     $table->string('password');
        //     $table->string('address');
        //     $table->string('lunchhour');
        //     $table->timestamps();
        DB::table('restaurants')->insert([
            'name' => '岡部商店',
            'address' => '岡部町',
            'lunchhour' => '9時~20時',
        ]);
        DB::table('restaurants')->insert([
            'name' => 'キッチン笹野',
            'address' => '笹野町',
            'lunchhour' => '10時~21時',
        ]);
    }
}