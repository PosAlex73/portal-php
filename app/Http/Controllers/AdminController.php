<?php

namespace App\Http\Controllers;

class AdminController
{
    public const PAGINATE = 15;

    public static function getPaginate()
    {
        //TODO
        $paginate = config('pagination');

        return empty($paginate) ? static::PAGINATE : $paginate;
    }
}
