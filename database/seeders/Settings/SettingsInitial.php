<?php

namespace Database\Seeders\Settings;

use App\Enums\CommonStatuses;
use App\Enums\Settings\SettingEnums;
use App\Enums\SettingTypes;

class SettingsInitial
{
    public static function getSettings()
    {
        return [
            'lang' => [
                'title' => SettingEnums::LANGUAGE,
                'value' => 'en',
                'type' => SettingTypes::SELECT
            ],
            'title' => [
                'title' => SettingEnums::SITE_TILE,
                'value' => '',
                'type' => SettingTypes::INPUT
            ],
            'description' => [
                'title' => SettingEnums::SITE_DESCRIPTION,
                'value' => '',
                'type' => SettingTypes::TEXTAREA
            ],
            'active' => [
                'title' => SettingEnums::SITE_ACTIVE,
                'value' => CommonStatuses::ACTIVE,
                'type' => SettingTypes::SELECT
            ],
            'front_pagination' => [
                'title' => SettingEnums::FRONT_PAGINATION,
                'value' => 15,
                'type' => SettingTypes::NUMBER
            ],
            'admin_pagination' => [
                'title' => SettingEnums::ADMIN_PAGINATION,
                'value' => 15,
                'type' => SettingTypes::NUMBER
            ],
            'logo' => [
                'title' => SettingEnums::LOGO,
                'value' => '',
                'type' => SettingTypes::IMAGE
            ]
        ];
    }
}
