<?php

namespace Database\Factories;

use App\Enums\CommonStatuses;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

class ArticleFactory extends Factory
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
            'title' => $this->faker->text(20),
            'text' => $this->faker->text(500),
            'image' => $this->faker->image(),
            'status' => $statuses->random(),
            'created' => $this->faker->date(),
            'updated' => $this->faker->date()
        ];
    }
}
