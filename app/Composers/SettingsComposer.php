<?php

namespace App\Composers;

use App\Models\Setting;
use Illuminate\View\View;

class SettingsComposer
{
    public function compose(View $view)
    {
        $view->with('settings', Setting::all());
    }
}
