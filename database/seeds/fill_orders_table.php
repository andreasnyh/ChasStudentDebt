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
            'id' => rand(),
            'student_id' => random_int(1,4),
            'beer_quantity' => random_int(1,4),
            'wine_quantity' => random_int(1,4),
            'softdrink_quantity' => random_int(1,4),
            'moonShine_quantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);

        DB::table('orders')->insert([
            'id' => rand(),
            'student_id' => random_int(1,4),
            'beer_quantity' => random_int(1,4),
            'wine_quantity' => random_int(1,4),
            'softdrink_quantity' => random_int(1,4),
            'moonShine_quantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'id' => rand(),
            'student_id' => random_int(1,4),
            'beer_quantity' => random_int(1,4),
            'wine_quantity' => random_int(1,4),
            'softdrink_quantity' => random_int(1,4),
            'moonShine_quantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'id' => rand(),
            'student_id' => random_int(1,4),
            'beer_quantity' => random_int(1,4),
            'wine_quantity' => random_int(1,4),
            'softdrink_quantity' => random_int(1,4),
            'moonShine_quantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'id' => rand(),
            'student_id' => random_int(1,4),
            'beer_quantity' => random_int(1,4),
            'wine_quantity' => random_int(1,4),
            'softdrink_quantity' => random_int(1,4),
            'moonShine_quantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'id' => rand(),
            'student_id' => random_int(1,4),
            'beer_quantity' => random_int(1,4),
            'wine_quantity' => random_int(1,4),
            'softdrink_quantity' => random_int(1,4),
            'moonShine_quantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'id' => rand(),
            'student_id' => random_int(1,4),
            'beer_quantity' => random_int(1,4),
            'wine_quantity' => random_int(1,4),
            'softdrink_quantity' => random_int(1,4),
            'moonShine_quantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'id' => rand(),
            'student_id' => random_int(1,4),
            'beer_quantity' => random_int(1,4),
            'wine_quantity' => random_int(1,4),
            'softdrink_quantity' => random_int(1,4),
            'moonShine_quantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'id' => rand(),
            'student_id' => random_int(1,4),
            'beer_quantity' => random_int(1,4),
            'wine_quantity' => random_int(1,4),
            'softdrink_quantity' => random_int(1,4),
            'moonShine_quantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);
        DB::table('orders')->insert([
            'id' => rand(),
            'student_id' => random_int(1,4),
            'beer_quantity' => random_int(1,4),
            'wine_quantity' => random_int(1,4),
            'softdrink_quantity' => random_int(1,4),
            'moonShine_quantity' => random_int(1,4),
            'date' => '2019-03-02 00:00:00'
        ]);



    }
}

