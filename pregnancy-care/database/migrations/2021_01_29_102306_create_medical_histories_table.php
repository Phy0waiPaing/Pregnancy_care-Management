<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_histories', function (Blueprint $table) {
            $table->id();
            $table->float("weight");
            $table->integer("pregnancy_week");
            $table->date("first_tetanus_vaccine");
            $table->date("second_tetanus_vaccine");
            $table->date("due_date");
            $table->date("current_date");
            $table->date("next_appointment");
            $table->unsignedBigInteger('nurse_id');
            $table->foreign('nurse_id')->references('id')->on('nurses');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');
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
        Schema::dropIfExists('medical_histories');
    }
}
