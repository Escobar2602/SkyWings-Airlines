<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('aeropuertos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('codigo', 3)->unique();
            $table->string('ciudad');
            $table->string('pais');
            $table->string('zona_horaria');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aeropuertos');
    }
};