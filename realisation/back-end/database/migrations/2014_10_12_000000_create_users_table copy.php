<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_avoir', function (Blueprint $table) {
            $table->string('id')->nullable();
            $table->string('titre')->nullable();
            $table->string('moyenne_vote')->nullable();
            $table->string('date')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('users');
    }
};
