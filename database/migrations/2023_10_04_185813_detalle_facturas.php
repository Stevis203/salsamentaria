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
    {
        Schema::create('detalleFactura', function (Blueprint $table) {
            $table->increments('codigoDetalle');
            $table->integer('codigoFactura');
            $table->varchar('refencia', 100);
            $table->integer('cantidadProducto');
            $table->decimal('valorProducto', 10,2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleFactura');
    }
};
