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
            'student_id' => 1,
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);

        DB::table('history')->insert([
            'student_id' => 2,
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);

        DB::table('history')->insert([
            'student_id' => 3,
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);

        DB::table('history')->insert([
            'student_id' => 4,
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);
        DB::table('history')->insert([
            'student_id' => 5,
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);

        DB::table('history')->insert([
            'student_id' => 6,
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);
        DB::table('history')->insert([
            'student_id' => 1,
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);

        DB::table('history')->insert([
            'student_id' => 2,
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);
        DB::table('history')->insert([
            'student_id' => 3,
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);

        DB::table('history')->insert([
            'student_id' => 4,
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);
        
        DB::table('history')->insert([
            'student_id' => 5,
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);

        DB::table('history')->insert([
            'student_id' => 6,
            'date' => '2019-03-02 00:00:00',
            'deposit' => random_int(5,50)
        ]);




    }
}
