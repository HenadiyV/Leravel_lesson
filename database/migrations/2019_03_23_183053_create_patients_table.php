<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer( 'id_doctor');
            $table->string('email');
            $table->string('doctor');
            $table->string('profile');
            $table->date('data') ;
            $table->string('room') ->nullable();
            $table->integer('id_room') ->nullable();
            $table->Time('time')->nullable() ;
            $table->integer('id_time') ->nullable();
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
        Schema::dropIfExists('patients');
    }
}
