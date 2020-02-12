<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('drink_id');
            $table->bigInteger('price'); 
            $table->timestamps();

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
        Schema::dropIfExists('price');
    }
}
