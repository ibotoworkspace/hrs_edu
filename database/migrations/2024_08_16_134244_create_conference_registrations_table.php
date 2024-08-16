<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferenceRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conference_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('other_names');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('your_conference_interest');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conference_registrations');
    }
}
