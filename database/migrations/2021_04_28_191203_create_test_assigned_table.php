<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestAssignedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_assigned', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('test_id')->nullable()->default(0);
            $table->bigInteger('group_id')->nullable()->default(0);
            $table->bigInteger('start_date_time')->nullable()->default(0);
            $table->bigInteger('end_date_time')->nullable()->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('test_assigned');
    }
}
