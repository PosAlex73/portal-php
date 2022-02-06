<?php

namespace App\Composers;

use App\Enums\MessageStatuses;
use Illuminate\View\View;

class MessageComposer
{
    public function compose(View $view)
    {
        $view->with('message_statuses', MessageStatuses::getAll());
    }
}
