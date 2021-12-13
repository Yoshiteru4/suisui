<?php

use Illuminate\Database\Seeder;

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
        DB::table('restaurants')->insert([ 
            [
            'name' => 'キッチン笹野',
            'telenumber' => 00000,
            'password' => '000000',
            'address'=> '大阪府',
            'lunchhour'=> '9時~18時',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
          ],
            [
            'name' => '長澤商店',
            'telenumber' => 00000,
            'password' => '000000',
            'address'=> '兵庫',
            'lunchhour'=> '10時~22時',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
          ],
            [
            'name' => '山本商店',
            'telenumber' => 00000,
            'password' => '000000',
            'address'=> '東京',
            'lunchhour'=> '9時~18時',
            'created_at' => new Datetime(),
            'updated_at' => new Datetime()
          ],
          ]);
    }
}
