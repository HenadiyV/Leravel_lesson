<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('doctors', function (Blueprint $table) {
                $table->increments('id');
                $table->string('surname');
                $table->string('name');
                $table->string('patronymic');
                $table->string('photo')->nullable();
                $table->integer('id_profile');
                $table->integer('id_room')->nullable();
                $table->integer('id_schedule')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
