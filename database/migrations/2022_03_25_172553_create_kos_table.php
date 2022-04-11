<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('host_id');
            $table->string('name');
            $table->unsignedBigInteger('type');
            $table->string('facility')->nullable();
            $table->unsignedBigInteger('address');
            $table->unsignedBigInteger('yearly_rent');
            $table->unsignedBigInteger('monthly_rent')->nullable();
            $table->unsignedBigInteger('category');
            $table->text('desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kos');
    }
}
