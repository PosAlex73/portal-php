<?php

namespace App\Composers;

use App\Enums\CommonStatuses;
use App\Enums\UserTypes;
use Illuminate\View\View;

class UserComposer
{
    public function compose(View $view)
    {
        $view->with('statuses', CommonStatuses::getAll());
        $view->with('user_types', UserTypes::getAll());
    }
}
