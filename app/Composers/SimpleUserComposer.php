<?php

namespace App\Composers;

use App\Enums\UserTypes;
use App\Models\User;
use Illuminate\View\View;

class SimpleUserComposer
{
    public function compose(View $view)
    {
        $view->with('simple_users', User::where(['type' => UserTypes::SIMPLE]));
    }
}
