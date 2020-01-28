<?php

use Illuminate\Database\Seeder;

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
            'drinkID' =>'1',
            'name' => 'Öl',
            'cost' => '10',
            'stock' => '5',
        ]);

        DB::table('drinks')->insert([
            'drinkID' => '2',
            'name' => 'Vin',
            'cost' => '10',
            'stock' => '12',
        ]);
        DB::table('drinks')->insert([
            'drinkID' =>'3',
            'name' => 'Läsk',
            'cost' => '5',
            'stock' => '25',
        ]);

        DB::table('drinks')->insert([
            'drinkID' => '4',
            'name' => 'Moonshine',
            'cost' => '6',
            'stock' => '25',
        ]);
    }
}
