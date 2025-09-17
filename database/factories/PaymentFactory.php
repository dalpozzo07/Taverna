<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;

class PaymentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'method' => $this->faker->randomElement(['PIX','CREDIT_CARD','BOLETO']),
            'status' => 'PENDING',
            'amount' => $this->faker->randomFloat(2, 50, 2000),
        ];
    }
}
