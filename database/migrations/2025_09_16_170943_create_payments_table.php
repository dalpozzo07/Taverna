<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id')
                ->constrained()
                  ->onDelete('cascade'); // se a order sumir, o pagamento some

            $table->enum('method', ['PIX', 'CREDIT_CARD', 'BOLETO'])
                ->default('PIX');

            $table->enum('status', ['PENDING', 'COMPLETED', 'FAILED'])
                ->default('PENDING');

            $table->decimal('amount', 10, 2); // valor pago
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
