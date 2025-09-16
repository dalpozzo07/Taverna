<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cart_id')
                ->constrained()
                  ->onDelete('cascade'); // se o carrinho for deletado, a order some

            $table->enum('status', ['PENDING', 'PAID', 'SHIPPED', 'CANCELLED'])
                ->default('PENDING');

            $table->decimal('total', 10, 2); // total do carrinho no momento da finalização
            $table->foreignId('address_id')
                    ->nullable()
                    ->constrained('addresses')
                    ->onDelete('set null'); // endereço de entrega

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
