<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(15),
            'description' => $this->faker->text(50),
            'image' => $this->faker->image(),
            'url' => $this->faker->text(20),
            'user_id' => User::all()->random(1)
        ];
    }
}
