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
        Schema::create('remediobrasils', function (Blueprint $table) {
            $table->id();
            $table->string('nome');// nome do paciente
            $table->string('medicamento'); //Nome do Medicamento
            $table->string('convenio'); // Convênio
            $table->decimal('dosagem',6,2);
            $table->decimal('preco',6,2); //preco
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remediobrasils');
    }
};
