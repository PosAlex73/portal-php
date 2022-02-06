<?php

namespace Database\Factories;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random(1)->get(['user_id']),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'lang' => $this->faker->languageCode(),
            'skills' => $this->faker->text(20),
            'about' => $this->faker->text(150)
        ];
    }
}
