<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('chat')->nullable()->default(null);
            $table->bigInteger('group_id')->nullable()->default(0);
            $table->bigInteger('user_id')->nullable()->default(0);
            $table->tinyInteger('is_class')->nullable()->default(0);
            $table->tinyInteger('is_general')->nullable()->default(0);
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
        Schema::dropIfExists('decision');
    }
}
