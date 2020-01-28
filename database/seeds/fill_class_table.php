<?php

use Illuminate\Database\Seeder;

class fill_class_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class')->insert([
            'name' => 'Fullstack Web Developer 2019'
        ]);

        DB::table('class')->insert([
            'name' => 'Fullstack Web Developer 2020'
        ]);

        DB::table('class')->insert([
            'name' => 'Interaktionsdesigner 2019'
        ]);

        DB::table('class')->insert([
            'name' => 'Interaktionsdesigner 2020',
        ]);
    }
}
