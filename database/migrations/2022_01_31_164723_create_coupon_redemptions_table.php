<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponRedemptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_redemptions', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_code');
            $table->bigInteger('total_discount');
            $table->dateTime('redemption_date');
            $table->unsignedBigInteger('customer_id');
            $table->timestamps();
        });

        Schema::table('coupon_redemptions', function (Blueprint $table) {
            $table->foreign('coupon_code')->references('coupon_code')->on('coupons')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon_redemptions');
    }
}
