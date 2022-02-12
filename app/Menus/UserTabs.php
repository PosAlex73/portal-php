<?php

namespace App\Menus;

class UserTabs implements AMenu
{
    public static function getMenu(): iterable
    {
        return [
            'users' => [
                'link' => 'users.tabs',
                'name' => 'user',
            ],
            'profile' => [
                'link' => 'users.tabs',
                'name' => 'profile',
            ],
            'links' => [
                'link' => 'users.tabs',
                'name' => 'links',
            ],
            'contacts' => [
                'link' => 'users.tabs',
                'name' => 'contacts',
            ],
            'thread' => [
                'link' => 'users.tabs',
                'name' => 'thread'
            ],
            'settings' => [
                'link' => 'users.tabs',
                'name' => 'settings'
            ]
        ];
    }
}
