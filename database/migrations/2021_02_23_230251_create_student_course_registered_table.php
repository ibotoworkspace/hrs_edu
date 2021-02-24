<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCourseRegisteredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_course_registered', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true)->length(20);
            $table->bigInteger('course_id')->nullable()->default(0);
            $table->string('name', 50);
            $table->tinyInteger('is_paid')->nullable()->default(0);
            
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
        Schema::dropIfExists('student_course_registered');
    }
}
