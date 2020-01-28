<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->bigInteger('student_ID')->unsigned();
            $table->bigInteger('order_ID')->unsigned();
            $table->timestamp('date');
            $table->integer('deposit');
            $table->timestamps();

            /*
            $table->foreign('order_ID')
                ->references('orderID')
                ->on('orders');*/

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
        Schema::dropIfExists('history');
    }
}
