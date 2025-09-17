<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class AddressFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'street' => $this->faker->streetName(),
            'number' => $this->faker->buildingNumber(),
            'complement' => $this->faker->secondaryAddress(),
            'district' => $this->faker->citySuffix(),
            'city' => $this->faker->city(),
            'state' => $this->faker->stateAbbr(),
            'country' => 'Brasil',
            'zip_code' => $this->faker->postcode(),
            'is_default' => $this->faker->boolean(80), // 80% chance de true
        ];
    }
}
