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
        DB::table('educational_programes')->insert([
            'name' => 'Fullstack Web Developer 2019'
        ]);

        DB::table('educational_programes')->insert([
            'name' => 'Fullstack Web Developer 2020'
        ]);

        DB::table('educational_programes')->insert([
            'name' => 'Interaktionsdesigner 2019'
        ]);

        DB::table('educational_programes')->insert([
            'name' => 'Interaktionsdesigner 2020',
        ]);
    }
}
