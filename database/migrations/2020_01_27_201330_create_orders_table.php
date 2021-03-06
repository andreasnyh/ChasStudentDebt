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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('orderNumber');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('drink_id');
            $table->integer('quantity');
            $table->unsignedBigInteger('amount');
            $table->timestamps();

            $table->foreign('student_id')
                ->references('id')
                ->on('students');

            $table->foreign('drink_id')
                ->references('id')
                ->on('drinks');
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
