<?php

namespace Database\Seeders\Settings;

use App\Enums\CommonStatuses;
use App\Enums\SettingTypes;

class UserSettingInitial
{
    public static function getUserSettings(): array
    {
        return [
            'active' => [
                'title' => 'setting.user_active',
                'value' => CommonStatuses::ACTIVE,
                'type' => SettingTypes::CHECKBOX
            ],
            'cs' => [
                'title' => 'setting.show_cs',
                'value' => CommonStatuses::ACTIVE,
                'type' => SettingTypes::CHECKBOX
            ],
            'show_links' => [
                'title' => 'setting.show_links',
                'value' => CommonStatuses::ACTIVE,
                'type' => SettingTypes::CHECKBOX
            ],
            'show_contacts' => [
                'title' => 'setting.show_contacts',
                'value' => CommonStatuses::ACTIVE,
                'type' => SettingTypes::CHECKBOX
            ],
            'get_contacts' => [
                'title' => 'setting.get_contacts',
                'value' => CommonStatuses::ACTIVE,
                'type' => SettingTypes::CHECKBOX
            ]
        ];
    }
}
