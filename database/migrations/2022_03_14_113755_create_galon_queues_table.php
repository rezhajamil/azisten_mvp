<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalonQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galon_queues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->unsignedBigInteger('order_id');
            $table->timestamps();
        });

        Schema::table('galon_queues', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('galon_purchases')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galon_queues');
    }
}
