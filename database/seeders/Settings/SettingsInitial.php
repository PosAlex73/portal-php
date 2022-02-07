<?php

namespace Database\Seeders\Settings;

use App\Enums\CommonStatuses;
use App\Enums\SettingTypes;

class SettingsInitial
{
    public static function getSettings()
    {
        return [
            'lang' => [
                'title' => 'language',
                'value' => 'en',
                'type' => SettingTypes::SELECT
            ],
            'title' => [
                'title' => 'site_title',
                'value' => '',
                'type' => SettingTypes::INPUT
            ],
            'description' => [
                'title' => 'description',
                'value' => '',
                'type' => SettingTypes::TEXTAREA
            ],
            'up' => [
                'title' => 'up',
                'value' => CommonStatuses::ACTIVE,
                'type' => SettingTypes::SELECT
            ]
        ];
    }
}
