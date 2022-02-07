<?php

namespace Database\Factories;

use App\Enums\CommonStatuses;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $statuses = collect(CommonStatuses::getAll());

        return [
            'title' => $this->faker->text(10),
            'status' => $statuses->random(1)->first()
        ];
    }
}
