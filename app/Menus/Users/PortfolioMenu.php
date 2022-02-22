<?php

namespace App\Menus\Users;

use App\Menus\AMenu;

class PortfolioMenu implements AMenu
{
    public static function getMenu(): iterable
    {
        return [
            'store' => [
                'link' => 'front_portfolios.store',
                'name' => 'front_portfolios.store'
            ],
            'list' => [
                'link' => 'front_portfolios.index',
                'name' => 'front_portfolios.index'
            ]
        ];
    }
}
