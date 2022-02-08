<?php

namespace App\Composers;

use App\Menus\FrontMenu;
use Illuminate\View\View;

class FrontCommonComposer
{
    public function compose(View $view)
    {
        $view->with('front_menu', FrontMenu::getMenu());
    }
}
