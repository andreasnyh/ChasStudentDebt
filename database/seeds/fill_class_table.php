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
            'name' => 'FWD19'
        ]);

        DB::table('educational_programes')->insert([
            'name' => 'FWD20'
        ]);

        DB::table('educational_programes')->insert([
            'name' => 'IK19'
        ]);

        DB::table('educational_programes')->insert([
            'name' => 'IK20'
        ]);
    }
}
