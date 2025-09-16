<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cart_id')
                ->constrained()
                  ->onDelete('cascade'); // se o carrinho for deletado, os itens somem

            $table->foreignId('product_id')
                ->constrained()
                  ->onDelete('cascade'); // se o produto for deletado, o item some

            $table->integer('quantity')->default(1);
            $table->decimal('price', 10, 2); // preço “congelado” no momento da adição

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
