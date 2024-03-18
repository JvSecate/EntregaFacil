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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('entregador_id')->nullable();
            $table->unsignedBigInteger('restaurante_id');
            $table->enum('status', ['Pendente', 'Em andamento', 'Entregue', 'Cancelado']);
            $table->timestamp('data_hora')->useCurrent();
            $table->foreign('cliente_id')->references('id')->on('usuarios');
            $table->foreign('entregador_id')->references('id')->on('usuarios');
            $table->foreign('restaurante_id')->references('id')->on('restaurantes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
