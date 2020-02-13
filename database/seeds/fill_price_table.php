<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fill_price_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('price')->insert([
            'drink_id' => 1,
            'price' => 10,
        ]);

        DB::table('price')->insert([
            'drink_id' => 2,
            'price' => 10,
        ]);

        DB::table('price')->insert([
            'drink_id' => 3,
            'price' => 10,
        ]);

        DB::table('price')->insert([
            'drink_id' => 4,
            'price' => 30,
        ]);
    }
}
