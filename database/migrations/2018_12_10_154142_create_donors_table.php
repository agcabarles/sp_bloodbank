<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            // $table->string('email')->unique();
            $table->date('bday');
            $table->string('sex');
            $table->string('b_type');
            $table->string('h_address');
            $table->string('don_date');
            $table->string('stats');
            $table->integer('mobile');
            $table->integer('temp');
            $table->integer('pulse');
            $table->integer('bp');
            $table->integer('weight');
            $table->string('hemoglobin');
            $table->string('hbsag');
            $table->string('aids');
            $table->string('malaria_smear');
            $table->string('hematocrit');
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
        Schema::dropIfExists('donors');
    }
}
