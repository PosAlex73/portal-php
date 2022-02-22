<?php

namespace App\Menus;

class AdminSidebar implements AMenu
{
    public static function getMenu(): array
    {
        return [
            'portfolio' => [
                'link' => 'portfolio.index',
                'name' => 'menu.portfolios'
            ],
            'user' => [
                'link' => 'user.index',
                'name' => 'menu.users'
            ],
            'category' => [
                'link' => 'category.index',
                'name' => 'menu.categories'
            ],
            'thread' => [
                'link' => 'thread.index',
                'name' => 'menu.threads'
            ],
            'skill' => [
                'link' => 'skill.index',
                'name' => 'menu.skills'
            ],
            'article' => [
                'link' => 'article.index',
                'name' => 'menu.articles'
            ]
        ];
    }
}
