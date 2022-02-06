<?php

namespace Database\Factories;

use App\Enums\MessageStatuses;
use App\Models\Thread;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThreadMessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $statuses = collect(MessageStatuses::getAll());

        return [
            'thread_id' => Thread::all()->random(1)->get(['thread_id']),
            'message' => $this->faker->text(35),
            'status' => $statuses->random(1)
        ];
    }
}
