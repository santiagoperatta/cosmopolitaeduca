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
        Schema::table('carreras', function (Blueprint $table) {
            $table->string('titulo');
			$table->foreignId('categoria_id')->constrained()->onDelete('cascade');
			$table->foreignId('grado_id')->constrained()->onDelete('cascade');
			$table->string('duracion');
			$table->date('ultimo_dia');
			$table->text('descripcion');
			$table->string('imagen');
			$table->integer('publicado')->default(1);
			$table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carreras', function (Blueprint $table) {
            $table->dropColumn(['titulo', 'categoria_id', 'grado_id', 'duracion',
			'ultimo_dia', 'descripcion', 'imagen', 'publicado', 'user_id' ]);
        });
    }
};
