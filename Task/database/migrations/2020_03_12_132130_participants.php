<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Participants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Participants', function (Blueprint $table) {
            $table->string('P_ID')->unique();
            $table->string('Name');
            $table->string('Email')->unique();
            $table->integer('Number');
            $table->String('Resume')->nullable();
            $table->primary('P_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Participants');
    }
}
