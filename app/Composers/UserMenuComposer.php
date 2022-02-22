<?php

namespace App\Composers;

use App\Menus\Users\PortfolioMenu;
use App\Menus\UserTabs;
use Illuminate\View\View;

class UserMenuComposer
{
    public function compose(View $view)
    {
        $view->with('userTabs', UserTabs::getMenu());
        $view->with('portfolioMenu', PortfolioMenu::getMenu());
    }
}
