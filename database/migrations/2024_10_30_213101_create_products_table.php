<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    SchemaS::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('marca'); // Columna para la marca del producto
        $table->double('modelo'); // Columna para el modelo del producto
        $table->string('material_correa'); // Columna para el material de la correa
        $table->string('resistencia_agua'); // Columna para la resistencia al agua
        $table->timestamps();
    });
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
