<?php

namespace App\Composers;

use App\Menus\UserTabs;
use Illuminate\View\View;

class UserMenuComposer
{
    public function compose(View $view)
    {
        $view->with('userTabs', UserTabs::getMenu());
    }
}
