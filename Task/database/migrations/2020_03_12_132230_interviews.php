<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Interviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Interviews', function (Blueprint $table) {
            $table->string('I_ID')->unique();
            $table->date('Date');
            $table->time('Start_Time');
            $table->time('End_Time');
            $table->primary('I_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Interviews');
    }
}
