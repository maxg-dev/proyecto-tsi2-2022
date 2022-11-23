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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('tipo_producto');
            $table->string('nombre',50)->unique();
            $table->unsignedInteger('precio');
            $table->unsignedInteger('costo');
            $table->smallInteger('stock');
            $table->smallInteger('stock_min');
            $table->tinyInteger('estado');
            $table->string('descripcion',150);

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
        Schema::dropIfExists('productos');
    }
};
