<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKosYearlyRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kos_yearly_rents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fee');
            $table->bigInteger('down_payment')->default(0)->nullable();
            $table->bigInteger('two_people_charge')->default(0)->nullable();
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
        Schema::dropIfExists('kos_yearly_rents');
    }
}
