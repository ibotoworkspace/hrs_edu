<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserquizResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userquiz_result', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->bigInteger('user_id')->nullable()->default(0);
            $table->bigInteger('test_id')->nullable()->default(0);
            $table->integer('score')->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userquiz_result');
    }
}
