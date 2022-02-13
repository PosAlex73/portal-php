<?php

namespace App\Composers\Users;

use Database\Seeders\Settings\UserSettingInitial;
use Illuminate\View\View;

class UserProfileComposer
{
    public function compose(View $view)
    {
        $view->with('user_settings', UserSettingInitial::getUserSettings());
    }
}
