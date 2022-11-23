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
        Schema::create('deuda_venta', function (Blueprint $table) {
            //clave primaria compuesta
            $table->unsignedBigInteger('deuda_id');
            $table->unsignedBigInteger('venta_id');
            $table->primary(['deuda_id', 'venta_id']);

            //otros campos
            $table->unsignedInteger('precio_venta');

            // //relaciones
            // $table->foreign('deuda_id')->references('id')->on('deuda');
            // $table->foreign('venta_id')->references('id')->on('ventas');

            $table->softDeletes();
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
        Schema::dropIfExists('deuda_venta');
    }
};
