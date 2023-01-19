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
        Schema::create('film_favorie', function (Blueprint $table) {
            $table->id();
            $table->string('idFilm')->nullable();
            $table->string('image')->nullable();
            $table->string('titre')->nullable();
            $table->string('saison')->nullable();
            $table->string('acteur')->nullable();
            $table->string('annee')->nullable();
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
