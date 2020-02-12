<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'student_id' => random_int(1,4),
            'orderNumber' => random_int(1,10),
            'drink_id' => random_int(1,4),
            'quantity' => random_int(1,10),
            'amount' => random_int(10,200)
        ]);
        DB::table('orders')->insert([
            'student_id' => random_int(1,4),
            'orderNumber' => random_int(1,10),
            'drink_id' => random_int(1,4),
            'quantity' => random_int(1,10),
            'amount' => random_int(10,200)
        ]);
        DB::table('orders')->insert([
            'student_id' => random_int(1,4),
            'orderNumber' => random_int(1,10),
            'drink_id' => random_int(1,4),
            'quantity' => random_int(1,10),
            'amount' => random_int(10,200)
        ]);
        DB::table('orders')->insert([
            'student_id' => random_int(1,4),
            'orderNumber' => random_int(1,10),
            'drink_id' => random_int(1,4),
            'quantity' => random_int(1,10),
            'amount' => random_int(10,200)
        ]);
        DB::table('orders')->insert([
            'student_id' => random_int(1,4),
            'orderNumber' => random_int(1,10),
            'drink_id' => random_int(1,4),
            'quantity' => random_int(1,10),
            'amount' => random_int(10,200)
        ]);
        DB::table('orders')->insert([
            'student_id' => 1,
            'orderNumber' => 1,
            'drink_id' => random_int(1,4),
            'quantity' => random_int(1,10),
            'amount' => random_int(10,200)
        ]);
        DB::table('orders')->insert([
            'student_id' => 1,
            'orderNumber' => 1,
            'drink_id' => random_int(1,4),
            'quantity' => random_int(1,10),
            'amount' => random_int(10,200)
        ]);
        DB::table('orders')->insert([
            'student_id' => 1,
            'orderNumber' => 1,
            'drink_id' => random_int(1,4),
            'quantity' => random_int(1,10),
            'amount' => random_int(10,200)
        ]);
    }
}

