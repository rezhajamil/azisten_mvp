<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKosMonthlyRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kos_monthly_rents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fee');
            $table->bigInteger('down_payment')->nullable();
            $table->bigInteger('two_people_charge')->nullable();
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
        Schema::dropIfExists('kos_monthly_rents');
    }
}
