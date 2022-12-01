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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();

            $table->string('pago_method');
            $table->string('pago_bank');
            $table->string('pago_email');

            $table->foreignId('registro_document')->references('id')->on('registros');
            $table->foreignId('vehiculo_vin')->references('id')->on('vehiculos');
            $table->foreignId('poliza_number')->references('id')->on('polizas');

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
        Schema::dropIfExists('pagos');
    }
};
