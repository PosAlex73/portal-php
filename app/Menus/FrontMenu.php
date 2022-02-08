<?php

namespace App\Menus;

class FrontMenu implements AMenu
{
    public static function getMenu(): iterable
    {
        return [
            'portfolios' => [
                'link' => 'front.portfolios',
                'name' => 'menu.portfolios'
            ],
            'users' => [
                'link' => 'front.users',
                'name' => 'menu.users'
            ],
            'blog' => [
                'link' => 'front.blog',
                'name' => 'menu.blog'
            ]
        ];
    }
}
