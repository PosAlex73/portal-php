<?php

namespace Database\Seeders\Settings;

use App\Enums\CommonStatuses;
use App\Enums\SettingTypes;

class UserSettingInitial
{
    public static function getUserSettings(): array
    {
        return [
            'user_active' => [
                'title' => 'user_active',
                'value' => CommonStatuses::ACTIVE,
                'type' => SettingTypes::CHECKBOX
            ],
            'show_cs' => [
                'title' => 'show_cs',
                'value' => CommonStatuses::ACTIVE,
                'type' => SettingTypes::CHECKBOX
            ],
            'show_links' => [
                'title' => 'show_links',
                'value' => CommonStatuses::ACTIVE,
                'type' => SettingTypes::CHECKBOX
            ],
            'show_contacts' => [
                'title' => 'show_contacts',
                'value' => CommonStatuses::ACTIVE,
                'type' => SettingTypes::CHECKBOX
            ],
            'get_contacts' => [
                'title' => 'get_contacts',
                'value' => CommonStatuses::ACTIVE,
                'type' => SettingTypes::CHECKBOX
            ],
            'get_mails' => [
                'title' => 'get_mails',
                'value' => CommonStatuses::ACTIVE,
                'type' => SettingTypes::CHECKBOX
            ],
            'subscribe_new_article' => [
                'title' => 'subscribe_new_article',
                'value' => CommonStatuses::ACTIVE,
                'type' => SettingTypes::CHECKBOX
            ]
        ];
    }
}
