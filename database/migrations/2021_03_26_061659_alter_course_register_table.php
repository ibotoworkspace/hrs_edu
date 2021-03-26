<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCourseRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_course_registered', function (Blueprint $table) {
            $table->tinyInteger('certificate_req')->nullable()->default(0);
            $table->tinyInteger('badge_req')->nullable()->default(0);
            $table->tinyInteger('voucher_req')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
