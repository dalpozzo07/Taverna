<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            // Relacionamento com usuário
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade'); 
            // se o user for deletado, os endereços dele somem também

            // Campos do endereço
            $table->string('street');        // Rua
            $table->string('number');        // Número
            $table->string('complement')->nullable(); // Apto, bloco...
            $table->string('district');      // Bairro
            $table->string('city');
            $table->string('state', 2);      // Ex: SP, RJ
            $table->string('country')->default('Brasil');
            $table->string('zip_code', 20);  // CEP

            $table->boolean('is_default')->default(false); // Endereço principal?

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
