<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InterviewParticipants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Interview_Participants', function (Blueprint $table) {
            $table->tinyIncrements('ID')->unique();
            $table->string('Interview');
            $table->string('Partipant');
            $table->string('Interviewer');
            $table->foreign('Interview')->references('I_ID')->on('Interviews');
            $table->foreign('Partipant')->references('P_ID')->on('Participants');
            $table->foreign('Interviewer')->references('User_ID')->on('Users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Interview_Participants');
    }
}
