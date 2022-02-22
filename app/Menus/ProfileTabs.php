<?php

namespace App\Menus;

class ProfileTabs implements AMenu
{
    public static function getMenu(): iterable
    {
        return [
            'profile' => [
                'link' => 'front_profile.tabs',
                'name' => 'profile',
            ],
            'links' => [
                'link' => 'front_profile.tabs',
                'name' => 'links',
            ],
            'contacts' => [
                'link' => 'front_profile.tabs',
                'name' => 'contacts',
            ],
            'thread' => [
                'link' => 'front_profile.tabs',
                'name' => 'thread'
            ],
            'settings' => [
                'link' => 'front_profile.tabs',
                'name' => 'settings'
            ]
        ];
    }
}
