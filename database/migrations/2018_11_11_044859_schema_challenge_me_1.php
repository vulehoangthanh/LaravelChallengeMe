<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchemaChallengeMe1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("case_1_products", function (Blueprint $table) {
            $table->bigIncrements('id');
        });

        Schema::create("case_1_product_in_warehouse", function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id');
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
