<?php

namespace Database\Factories;

use Database\Seeders\Settings\UserSettingInitial;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'values' => serialize(UserSettingInitial::getUserSettings())
        ];
    }
}
