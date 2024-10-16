<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutasYTarifasTable extends Migration
{
    public function up()
    {
        Schema::create('rutasytarifas', function (Blueprint $table) {
            $table->id('id_rutasytarifas');
            $table->string('ciudad_origen');
            $table->string('ciudad_destino');
            $table->decimal('precio', 8, 2);
            $table->integer('duracion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rutasytarifas');
    }
}