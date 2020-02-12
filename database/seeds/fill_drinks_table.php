<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fill_drinks_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drinks')->insert([
            'id' =>'1',
            'name' => 'Öl',
            'stock' => '5',
        ]);

        DB::table('drinks')->insert([
            'id' => '2',
            'name' => 'Vin',
            'stock' => '12',
        ]);
        DB::table('drinks')->insert([
            'id' =>'3',
            'name' => 'Läsk',
            'stock' => '25',
        ]);

        DB::table('drinks')->insert([
            'id' => '4',
            'name' => 'Moonshine',
            'stock' => '25',
        ]);
    }
}
