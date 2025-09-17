<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cart;
use App\Models\Address;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cart_id' => Cart::factory(),
            'address_id' => Address::factory(),
            'status' => 'PENDING',
            'total' => $this->faker->randomFloat(2, 50, 2000),
        ];
    }
}
