<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('monday')->default(0);
            $table->boolean('tuesday')->default(0);
            $table->boolean('wednesday')->default(0);
            $table->boolean('thursday')->default(0);
            $table->boolean('friday')->default(0);
            $table->boolean('saturday')->default(0);
            $table->boolean('sunday')->default(0);
            $table->integer('id_startMonday')->nullable();
            $table->integer('id_stopMonday')->nullable();
            $table->integer('id_startTuesday')->nullable();
            $table->integer('id_stopTuesday')->nullable();
            $table->integer('id_startWednesday')->nullable();
            $table->integer('id_stopWednesday')->nullable();
            $table->integer('id_startThursday')->nullable();
            $table->integer('id_stopThursday')->nullable();
            $table->integer('id_startFriday')->nullable();
            $table->integer('id_stopFriday')->nullable();
            $table->integer('id_startSaturday')->nullable();
            $table->integer('id_stopSaturday')->nullable();
            $table->integer('id_startSunday')->nullable();
            $table->integer('id_stopSunday')->nullable();
            $table->integer('doctor')->default(0);
            $table->integer('id_doctor')->default(0);
            $table->boolean('status')->default(0);
            $table->string('mon')->default('Monday');
            $table->string('tues')->default('Tuesday');
            $table->string('wednes')->default('Wednesday');
            $table->string('thurs')->default('Thursday');
            $table->string('fri')->default('Friday');
            $table->string('satur')->default('Saturday');
            $table->string('sun')->default('Sunday');
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
        Schema::dropIfExists('schedules');
    }
}
