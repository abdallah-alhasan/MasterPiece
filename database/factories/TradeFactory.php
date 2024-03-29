<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trade>
 */
class TradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => '1',
            'platform_id' => $this->faker->numberBetween(1,4),
            'title' => $this->faker->text(50),
            'price' => 399.99,
            'image' => 'trades/6UAgzBmsuaHB3ZYgs7ToE4U9Gww1KUNkiV8hbJyP.png',
            'tags' => $this->faker->word(),
        ];
    }
}
