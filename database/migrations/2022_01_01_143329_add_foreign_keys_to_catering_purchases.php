<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCateringPurchases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catering_purchases', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('type')->references('id')->on('catering_categories')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('duration')->references('id')->on('catering_durations')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catering_purchases', function (Blueprint $table) {
            $table->dropForeign('catering_purchases_customer_id_foreign');
            $table->dropForeign('catering_purchases_type_foreign');
            $table->dropForeign('catering_purchases_duration_foreign');
        });
    }
}
