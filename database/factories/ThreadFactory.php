<?php

namespace Database\Factories;

use App\Enums\CommonStatuses;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThreadFactory extends Factory
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
            'status' => $statuses->random(1)->first()
        ];
    }
}
