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
        Schema::create('cotizacions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('numero')->nullable();
            $table->timestamp('fecha_creacion')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('contacto_id')->constrained();
            $table->foreignId('producto_id')->constrained();
            $table->bigInteger('cantidad_cotizar')->nullable();
            $table->string('observacion')->nullable();
            $table->timestamp('fecha_prevista')->nullable();
            $table->string('estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotizacions');
    }
};
