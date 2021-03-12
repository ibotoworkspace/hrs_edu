<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPaymentTableAddPromoPrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment', function (Blueprint $table) {
            $table->bigInteger('price')->nullable()->default(0);
            $table->bigInteger('actual_amount')->nullable()->default(0);
            $table->bigInteger('discount_amount')->nullable()->default(0);
            $table->bigInteger('promocode_id')->nullable()->default(0);
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
