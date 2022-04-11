<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKosImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kos_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kos_id');
            $table->string('url');
            $table->boolean('is_cover')->default(false);
            $table->timestamps();
        });

        Schema::table('kos_images', function (Blueprint $table) {
            $table->foreign('kos_id')->references('id')->on('kos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kos_images');
    }
}
