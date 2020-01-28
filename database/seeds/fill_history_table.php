<?php

use Illuminate\Database\Seeder;

class fill_history_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('history')->insert([
            'student_ID' => random_int(1,4),
            'order_ID' => rand(),
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);

        DB::table('history')->insert([
            'student_ID' => random_int(1,4),
            'order_ID' => rand(),
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);
        DB::table('history')->insert([
            'student_ID' => random_int(1,4),
            'order_ID' => rand(),
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);
        DB::table('history')->insert([
            'student_ID' => random_int(1,4),
            'order_ID' => rand(),
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);

    }
}
