<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromoCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo_code', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true)->length(20);
            $table->string('title', 50)->nullable()->default(null);
            $table->bigInteger('percentage')->nullable()->default(0);
            $table->string('code')->nullable()->default(null);
            $table->bigInteger('validity')->nullable()->default(0);
            $table->bigInteger('used_times')->nullable()->default(0);
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
        Schema::dropIfExists('promo_code');
    }
}
