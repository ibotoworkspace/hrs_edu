<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkilladvisorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skilladvisor', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true)->length(20);
            $table->bigInteger('user_id')->nullable()->default(0);
            $table->string('name', 50);
            $table->string('lastname', 50);
            $table->string('email', 50)->unique();
            $table->string('phone_no')->nullable()->default(null);
            $table->string('password', 255)->nullable()->default(null);
            $table->string('confirm_password', 255)->nullable()->default(null);
            $table->rememberToken();
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
        Schema::dropIfExists('skilladvisor');
    }
}
