<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('identificacion')->unique();
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('idioma');
            $table->string('pais');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personal');
    }
};