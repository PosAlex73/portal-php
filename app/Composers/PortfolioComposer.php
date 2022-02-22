<?php

namespace App\Composers;

use App\Enums\ContactReasons;
use Illuminate\View\View;

class PortfolioComposer
{
    public function compose(View $view)
    {
        $view->with('contact_types', ContactReasons::getAll());
    }
}
