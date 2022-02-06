<?php

namespace Database\Factories;

use App\Enums\CommonStatuses;
use App\Enums\ContactTypes;
use App\Enums\UserTypes;
use App\Models\User;
use Cassandra\Type\UserType;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = collect(ContactTypes::getAll());
        $user_statuses = collect(CommonStatuses::getAll());

        return [
            'title' => $this->faker->text(7),
            'contact' => $this->faker->text(20),
            'type' => $types->random(1),
            'status' => $types->random(1),
            'user_id' => User::all()->random(1)->get(['user_id'])
        ];
    }
}
