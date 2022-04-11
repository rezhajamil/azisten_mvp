<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('kos', function (Blueprint $table) {
            $table->foreign('host_id')->references('id')->on('hosts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('type')->references('id')->on('kos_types')->onUpdate('cascade');
            $table->foreign('yearly_rent')->references('id')->on('kos_yearly_rents')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('monthly_rent')->references('id')->on('kos_monthly_rents')->nullOnDelete()->onUpdate('cascade');
            $table->foreign('category')->references('id')->on('kos_categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kos', function (Blueprint $table) {
            $table->dropForeign(['host_id', 'type', 'yearly_rent', 'monthly_rent', 'category']);
        });
    }
}
