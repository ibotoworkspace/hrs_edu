<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveStartDateTimeFromTestAssigned extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('test_assigned', function (Blueprint $table) {
           $table->dropColumn('start_date_time');
           $table->dropColumn('end_date_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('test_assigned', function (Blueprint $table) {
            //
        });
    }
}
