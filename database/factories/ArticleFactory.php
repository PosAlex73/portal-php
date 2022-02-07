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
            'image' => $this->faker->text(10),
            'status' => $statuses->random(),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date()
        ];
    }
}
