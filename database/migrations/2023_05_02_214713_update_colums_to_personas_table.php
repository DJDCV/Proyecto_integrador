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
        //Eliminar llave foránea
        Schema::table('personas', function (Blueprint $table) {
            $table->dropForeign(['documento_id']);
            $table->dropColumn('documento_id');
        });

        //Crear una nueva llave foránea
        Schema::table('personas', function (Blueprint $table) {
            $table->foreignId('documento_id')->after('estado')->constrained('documentos')->onDelete('cascade');
        });

        //Crear el campo numero_documento
        Schema::table('personas', function (Blueprint $table) {
            $table->string('numero_documento', 20)->after('nombre_columna_existente', function ($table) {
                // Lógica de la migración aquí
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Eliminar la nueva llave foránea
        Schema::table('personas', function (Blueprint $table) {
            $table->dropForeign(['documento_id']);
            $table->dropColumn('documento_id');
        });

        // Eliminar el campo numero_documento si existe
            Schema::table('personas', function (Blueprint $table) {
            $table->dropColumn('numero_documento');
        });

        // Crear el campo numero_documento después de documento_id
            Schema::table('personas', function (Blueprint $table) {
            $table->string('numero_documento', 20)->after('documento_id');
        });
    }
};
