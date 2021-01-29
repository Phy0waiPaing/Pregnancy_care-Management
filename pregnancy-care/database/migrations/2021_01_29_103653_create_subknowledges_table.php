<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubknowledgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subknowledges', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger('knowledge_id');
            $table->foreign('knowledge_id')->references('id')->on('knowledges');
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
        Schema::dropIfExists('subknowledges');
    }
}
