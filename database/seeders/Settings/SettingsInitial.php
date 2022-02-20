<?php

namespace Database\Seeders\Settings;

use App\Enums\CommonStatuses;
use App\Enums\Langs;
use App\Enums\Settings\SettingEnums;
use App\Enums\SettingTypes;

class SettingsInitial
{
    public static function getSettings()
    {
        return [
            SettingEnums::LANGUAGE => [
                'title' => SettingEnums::LANGUAGE,
                'value' => 'en',
                'type' => SettingTypes::SELECT,
                'variants' => Langs::getAll()
            ],
            SettingEnums::SITE_TILE => [
                'title' => SettingEnums::SITE_TILE,
                'value' => '',
                'type' => SettingTypes::INPUT
            ],
            SettingEnums::SITE_DESCRIPTION => [
                'title' => SettingEnums::SITE_DESCRIPTION,
                'value' => '',
                'type' => SettingTypes::TEXTAREA
            ],
            SettingEnums::SITE_ACTIVE => [
                'title' => SettingEnums::SITE_ACTIVE,
                'value' => CommonStatuses::ACTIVE,
                'type' => SettingTypes::SELECT,
                'variants' => CommonStatuses::getAll()
            ],
            SettingEnums::FRONT_PAGINATION => [
                'title' => SettingEnums::FRONT_PAGINATION,
                'value' => 15,
                'type' => SettingTypes::NUMBER
            ],
            SettingEnums::ADMIN_PAGINATION => [
                'title' => SettingEnums::ADMIN_PAGINATION,
                'value' => 15,
                'type' => SettingTypes::NUMBER
            ],
            SettingEnums::LOGO => [
                'title' => SettingEnums::LOGO,
                'value' => '',
                'type' => SettingTypes::IMAGE
            ]
        ];
    }
}
