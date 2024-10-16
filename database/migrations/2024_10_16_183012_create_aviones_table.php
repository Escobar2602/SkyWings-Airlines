<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('aviones', function (Blueprint $table) {
        $table->id();
        $table->string('avion');
        $table->integer('capacidad');
        $table->string('matricula')->unique();
        $table->string('modelo');
        $table->string('estado');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aviones');
    }
};
