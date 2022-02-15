<?php

namespace App\Composers\Users;

use App\Menus\ProfileTabs;
use Illuminate\View\View;

class UserProfileComposer
{
    public function compose(View $view)
    {
        $view->with('userTabs', ProfileTabs::getMenu());
    }
}
