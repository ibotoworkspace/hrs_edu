<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable()->default(null);
            $table->bigInteger('lecturer_id')->nullable()->default(0);
            $table->bigInteger('user_id')->nullable()->default(0);
            $table->bigInteger('course_id')->nullable()->default(0);
            $table->binary('notes')->nullable()->default(null);
            $table->string('class_link')->nullable()->default(null);
            $table->bigInteger('start_date')->nullable()->default(0);
            $table->bigInteger('end_date')->nullable()->default(0);
            $table->tinyInteger('is_active');
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
        Schema::dropIfExists('group');
    }
}
