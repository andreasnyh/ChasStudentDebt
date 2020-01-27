<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(fill_students_table::class);
        $this->call(fill_drinks_table::class);
        $this->call(fill_orders_table::class);



    }
}
