<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('orderID');
            $table->bigInteger('drink_ID')->unsigned();
            $table->bigInteger('student_ID')->unsigned();
            $table->timestamp('date');
            $table->timestamps();

            $table->foreign('drink_ID')
                ->references('drinkID')
                ->on('drinks');

            $table->foreign('student_ID')
                ->references('studentID')
                ->on('students');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
