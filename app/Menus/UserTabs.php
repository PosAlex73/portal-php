<?php

namespace App\Menus;

class UserTabs implements AMenu
{
    public static function getMenu(): iterable
    {
        return [
            'user' => [
                'link' => 'user.edit',
                'name' => 'user_edit',
            ],
            'profile' => [
                'link' => 'user_profile.edit',
                'name' => 'user_profile_edit'
            ],
            'links' => [
                'link' => 'user_link.index',
                'name' => 'user_link_list'
            ],
            'contacts' => [
                'link' => 'user_contact.index',
                'name' => 'user_contact__list',
            ],
            'thread' => [
                'link' => 'thread.edit',
                'name' => 'user_thread_edit'
            ],
            'settings' => [
                'link' => 'settings.edit',
                'name' => 'user_settings_edit'
            ]
        ];
    }
}
