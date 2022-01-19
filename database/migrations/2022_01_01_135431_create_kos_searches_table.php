<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKosSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kos_searches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->string('college');
            $table->string('facility')->nullable();
            $table->string('type');
            $table->string('payment_interval');
            $table->integer('price_min');
            $table->integer('price_max');
            $table->date('booking_date')->nullable();
            $table->string('referral_code')->nullable();
            $table->unsignedBigInteger('status_id')->default(1);
            $table->unsignedBigInteger('review_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('review_id')->references('id')->on('reviews')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('status_id')->references('id')->on('statuses')->cascadeOnUpdate()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kos_searches');
    }
}
