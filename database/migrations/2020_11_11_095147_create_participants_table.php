<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'participants', function (Blueprint $table) {
                  $table->id();
                  $table->string('fname');
                  $table->string('lname');
                  $table->string('email');
                  $table->string('phonenumber');
                  $table->string('content');
                  $table->unsignedBigInteger('program_id');
                  $table->foreign('program_id')->references('id')->on('programs');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
