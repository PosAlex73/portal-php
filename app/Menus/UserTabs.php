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
                'link' => 'user_profile.profile',
                'name' => 'user_profile_edit',
            ],
            'links' => [
                'link' => 'user_link.list',
                'name' => 'user_link_list',
            ],
            'contacts' => [
                'link' => 'user_contact.list',
                'name' => 'user_contact_list',
            ],
            'thread' => [
                'link' => 'thread.thread',
                'name' => 'user_thread_edit'
            ],
            'settings' => [
                'link' => 'settings.list',
                'name' => 'user_settings_edit'
            ]
        ];
    }
}
