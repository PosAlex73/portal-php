<?php

namespace App\Composers;

use App\Menus\AdminSidebar;
use Illuminate\View\View;

class AdminMenuComposer
{
    public function compose(View $view)
    {
        $view->with('admin_menu', AdminSidebar::getMenu());
    }
}
