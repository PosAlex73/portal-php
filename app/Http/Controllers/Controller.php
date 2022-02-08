<?php

namespace App\Http\Controllers;

use App\Enums\Settings\SettingEnums;
use App\Facades\Set;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function getPaginate()
    {
        return Set::get(SettingEnums::FRONT_PAGINATION);
    }
}
