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
        Schema::create('lib_detalles_libros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_producto')
                ->constrained('prd_productos')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('id_autor')
                ->constrained('lib_autores')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('id_genero')
                ->constrained('lib_generos')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->string('isbn')->unique();
            $table->string('anio_publicacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lib_detalles_libros');
    }
};
