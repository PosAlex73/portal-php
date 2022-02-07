<?php

namespace App\Menus;

class FrontMenu implements AMenu
{
    public static function getMenu(): iterable
    {
        return [
            'portfolios' => [
                'link' => 'portfolio',
                'name' => 'menu.portfolios'
            ],
            'users' => [
                'link' => 'users',
                'name' => 'menu.users'
            ]
        ];
    }
}
