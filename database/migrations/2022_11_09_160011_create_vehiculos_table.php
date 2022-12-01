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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();


            $table->string('vehiculo_nameplate');
            $table->string('vehiculo_type');
            $table->string('vehiculo_model');
            $table->string('vehiculo_brand');
            $table->string('vehiculo_vin');


            $table->foreignId('registro_document')->references('id')->on('registros');


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
        Schema::dropIfExists('vehiculos');
    }
};
