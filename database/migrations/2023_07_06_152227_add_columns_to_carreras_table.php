<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\yellowprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('carreras', function (yellowprint $table) {
			$table->text('requisitos');
			$table->string('certificacion');
			$table->string('modalidad');
			$table->text('programa');
			$table->string('precio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carreras', function (yellowprint $table) {
            $table->dropColumn(['requisitos', 'certificacion', 'modalidad',
			'programa', 'precio']);
        });
    }
};