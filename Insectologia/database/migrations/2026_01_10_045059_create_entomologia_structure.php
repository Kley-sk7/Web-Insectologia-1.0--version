<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecutar las migraciones
     */
    public function up()
    {
        // ========== TABLA ESPECIES (PRINCIPAL) ==========


        // ========== TABLA IMÁGENES MORFOLÓGICAS ==========

        // ========== TABLA CICLOS DE VIDA ==========
        Schema::create('ciclos_vida', function (Blueprint $table) {
            $table->id();
            $table->foreignId('especie_id')
                  ->constrained('especies')
                  ->onDelete('cascade');
                  
            $table->string('etapa'); // Huevo, Larva, Pupa, Adulto, Ninfa, etc.
            $table->text('descripcion')->nullable();
            $table->string('alimentacion')->nullable();
            $table->string('habitat')->nullable();
            $table->string('ruta_imagen')->nullable();
            
            // Métodos de control (almacenados como JSON)
            $table->json('metodos_control')->nullable();
            $table->text('detalle_control')->nullable();
            
            $table->timestamps();
            
            // Índices
            $table->index('especie_id');
            $table->index('etapa');
        });

        // ========== TABLA PARA IMÁGENES DE ETAPAS (opcional, si la separas) ==========
        Schema::create('imagenes_etapas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ciclo_vida_id')
                  ->constrained('ciclos_vida')
                  ->onDelete('cascade');
                  
            $table->string('ruta_imagen');
            $table->string('descripcion')->nullable();
            
            $table->timestamps();
            
            // Índices
            $table->index('ciclo_vida_id');
        });

        // ========== TABLA PARA IMÁGENES DINÁMICAS (opcional) ==========
        Schema::create('imagenes_dinamicas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('especie_id')
                  ->constrained('especies')
                  ->onDelete('cascade');
                  
            $table->string('tipo_parte'); // alas, antenas, ojos, etc.
            $table->string('nombre_parte');
            $table->string('ruta_imagen');
            $table->text('descripcion')->nullable();
            
            $table->timestamps();
            
            // Índices
            $table->index('especie_id');
            $table->index('tipo_parte');
        });
    }

    /**
     * Revertir las migraciones
     */
    public function down()
    {
        // Eliminar en orden inverso (primero las dependientes)
        Schema::dropIfExists('imagenes_dinamicas');
        Schema::dropIfExists('imagenes_etapas');
        Schema::dropIfExists('ciclos_vida');
        Schema::dropIfExists('imagenes_morfologicas');
        Schema::dropIfExists('especies');
    }
};