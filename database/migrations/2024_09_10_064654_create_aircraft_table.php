<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('aircraft', function (Blueprint $table) {
            $table->id();
            $table->string('avion');
            $table->integer('capacidad');
            $table->string('matricula')->unique();
            $table->enum('modelo', ['narrowBody', 'wideBody', 'regional']);
            $table->string('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aircraft');
    }
};