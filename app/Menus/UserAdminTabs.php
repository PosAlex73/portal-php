<?php

namespace App\Menus;

class UserAdminTabs implements AMenu
{
    public static function getMenu(): array
    {
        return [
            'general' => [
                'link' => 'user.edit',
                'name' => 'menu.general'
            ],
            'contact' => [
                'link' => 'user_contact.index',
                'name' => 'menu.contacts',
            ],
            'link' => [
                'link' => 'user_link.index',
                'name' => 'menu.user_links'
            ],
            'profile' => [
                'link' => 'user_profile.edit',
                'name' => 'menu.profile'
            ],
            'thread' => [
                'link' => 'thread.edit',
                'name' => 'menu.thread'
            ]
        ];
    }
}
