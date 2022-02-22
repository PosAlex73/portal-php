<?php

namespace App\Http\Controllers;

use App\Enums\Settings\SettingEnums;
use App\Facades\Set;

class AdminController
{
    public static function getPaginate()
    {
        return Set::get(SettingEnums::ADMIN_PAGINATION);
    }
}
