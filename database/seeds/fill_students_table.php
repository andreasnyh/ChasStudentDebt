<?php

use Illuminate\Database\Seeder;

class fill_students_table extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'studentID' => '1',
            'name' => 'Andreas Ny',
            'email' => Str::random(10).'@chasacademy.se',
            'class' => 'Fullstack Web Developer'
        ]);

        DB::table('students')->insert([
            'studentID' => '2',
            'name' => 'Erik Axelsson',
            'email' => Str::random(10).'@chasacademy.se',
            'class' => 'Fullstack Web Developer'
        ]);

        DB::table('students')->insert([
            'studentID' => '3',
            'name' => 'Simon Nordström',
            'email' => Str::random(10).'@chasacademy.se',
            'class' => 'Fullstack Web Developer'
        ]);

        DB::table('students')->insert([
            'studentID' => '4',
            'name' => 'Hung Ta',
            'email' => Str::random(10).'@chasacademy.se',
            'class' => 'Fullstack Web Developer'
        ]);

        DB::table('students')->insert([
            'studentID' => '5',
            'name' => 'Dylan Nore',
            'email' => Str::random(10).'@gmail.com',
            'class' => 'Fullstack Web Developer'
        ]);

        DB::table('students')->insert([
            'studentID' => '6',
            'name' => 'Karl Falk',
            'email' => Str::random(10).'@chasacademy.se',
            'class' => 'Fullstack Web Developer'
        ]);
    }
}
