<?php

namespace App\Composers;

use Illuminate\View\View;
use App\Enums\CommonStatuses;

class CommonStatusComposer
{
    public function compose(View $view)
    {
        $view->with('statuses', CommonStatuses::getAll());
    }
}
