<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priceplans', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('UserId');
            // for BASIC plan
            $table->string('basic_price')->nullable();
            $table->string('basic_title')->nullable();
            $table->string('basic_pic')->nullable();
            $table->string('basic_workhour')->nullable();
            $table->string('basic_location')->nullable();
            $table->string('basic_poses')->nullable();
            $table->string('basic_edit')->nullable();
            $table->string('basic_Sfile')->nullable();
            $table->string('basic_Dpic')->nullable();
            $table->string('basic_completeIn')->nullable();
            // for STANDARD plan
            $table->string('stand_price')->nullable();
            $table->string('stand_title')->nullable();
            $table->string('stand_pic')->nullable();
            $table->string('stand_workhour')->nullable();
            $table->string('stand_location')->nullable();
            $table->string('stand_poses')->nullable();
            $table->string('stand_edit')->nullable();
            $table->string('stand_Sfile')->nullable();
            $table->string('stand_Dpic')->nullable();
            $table->string('stand_completeIn')->nullable();
            // for PREMIUM plan
            $table->string('p_price')->nullable();
            $table->string('p_title')->nullable();
            $table->string('p_pic')->nullable();
            $table->string('p_workhour')->nullable();
            $table->string('p_location')->nullable();
            $table->string('p_poses')->nullable();
            $table->string('p_edit')->nullable();
            $table->string('p_Sfile')->nullable();
            $table->string('p_Dpic')->nullable();
            $table->string('p_completeIn')->nullable();
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
        Schema::dropIfExists('priceplans');
    }
}
