<?php

namespace App\Composers\Users;

use App\Enums\CommonStatuses;
use App\Menus\ProfileTabs;
use Illuminate\View\View;

class UserProfileComposer
{
    public function compose(View $view)
    {
        $view->with('userTabs', ProfileTabs::getMenu());
        $view->with('common_statuses', CommonStatuses::getAll());
    }
}
