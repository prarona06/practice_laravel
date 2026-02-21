<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {       return [
            'shop_name' => $this->faker->company(),
            'shop_number' => $this->faker->unique()->numberBetween(1, 100),
            'shop_address' => $this->faker->address(),
            'shop_phone' => $this->faker->unique()->numerify('555#######'),
            'shop_email' => $this->faker->unique()->safeEmail(),
            'shop_tin_number' => 'TIN' . $this->faker->unique()->numerify('######'),
        ];

    }
}
