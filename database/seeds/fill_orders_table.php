<?php

use Illuminate\Database\Seeder;

class fill_orders_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'orderID' => rand(),
            'student_ID' => random_int(1,4),
            'beerQuantity' => random_int(1,4),
            'wineQuantity' => random_int(1,4),
            'softdrinkQuantity' => random_int(1,4),
            'moonShineQuantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);

        DB::table('orders')->insert([
            'orderID' => rand(),
            'student_ID' => random_int(1,4),
            'beerQuantity' => random_int(1,4),
            'wineQuantity' => random_int(1,4),
            'softdrinkQuantity' => random_int(1,4),
            'moonShineQuantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'orderID' => rand(),
            'student_ID' => random_int(1,4),
            'beerQuantity' => random_int(1,4),
            'wineQuantity' => random_int(1,4),
            'softdrinkQuantity' => random_int(1,4),
            'moonShineQuantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'orderID' => rand(),
            'student_ID' => random_int(1,4),
            'beerQuantity' => random_int(1,4),
            'wineQuantity' => random_int(1,4),
            'softdrinkQuantity' => random_int(1,4),
            'moonShineQuantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'orderID' => rand(),
            'student_ID' => random_int(1,4),
            'beerQuantity' => random_int(1,4),
            'wineQuantity' => random_int(1,4),
            'softdrinkQuantity' => random_int(1,4),
            'moonShineQuantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'orderID' => rand(),
            'student_ID' => random_int(1,4),
            'beerQuantity' => random_int(1,4),
            'wineQuantity' => random_int(1,4),
            'softdrinkQuantity' => random_int(1,4),
            'moonShineQuantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'orderID' => rand(),
            'student_ID' => random_int(1,4),
            'beerQuantity' => random_int(1,4),
            'wineQuantity' => random_int(1,4),
            'softdrinkQuantity' => random_int(1,4),
            'moonShineQuantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'orderID' => rand(),
            'student_ID' => random_int(1,4),
            'beerQuantity' => random_int(1,4),
            'wineQuantity' => random_int(1,4),
            'softdrinkQuantity' => random_int(1,4),
            'moonShineQuantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'orderID' => rand(),
            'student_ID' => random_int(1,4),
            'beerQuantity' => random_int(1,4),
            'wineQuantity' => random_int(1,4),
            'softdrinkQuantity' => random_int(1,4),
            'moonShineQuantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'orderID' => rand(),
            'student_ID' => random_int(1,4),
            'beerQuantity' => random_int(1,4),
            'wineQuantity' => random_int(1,4),
            'softdrinkQuantity' => random_int(1,4),
            'moonShineQuantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
    }
}

