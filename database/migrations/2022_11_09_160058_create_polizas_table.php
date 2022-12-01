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
        Schema::create('polizas', function (Blueprint $table) {
            $table->id();


            $table->string('poliza_number');
            $table->string('poliza_type');
            $table->date('poliza_terminatedate');

            $table->foreignId('vehiculo_nameplate')->references('id')->on('vehiculos');
            $table->foreignId('vehiculo_brand')->references('id')->on('vehiculos');
            $table->foreignId('vehiculo_vin')->references('id')->on('vehiculos');
            $table->foreignId('registro_document')->references('id')->on('registros');
            $table->foreignId('registro_firstname')->references('id')->on('registros');
            $table->foreignId('registro_lastname')->references('id')->on('registros');

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
        Schema::dropIfExists('polizas');
    }
};
