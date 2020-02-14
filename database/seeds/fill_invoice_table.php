<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fill_invoice_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoices')->insert([
            'student_id' => random_int(1,5),
            'amount' => random_int(10, 200)
        ]);
        DB::table('invoices')->insert([
            'student_id' => random_int(1,5),
            'amount' => random_int(10, 200)
        ]);
        DB::table('invoices')->insert([
            'student_id' => random_int(1,5),
            'amount' => random_int(10, 200)
        ]);
        DB::table('invoices')->insert([
            'student_id' => random_int(1,5),
            'amount' => random_int(10, 200)
        ]);
        DB::table('invoices')->insert([
            'student_id' => random_int(1,5),
            'amount' => random_int(10, 200)
        ]);
        DB::table('invoices')->insert([
            'student_id' => random_int(1,5),
            'amount' => random_int(10, 200)
        ]);
    }
}
