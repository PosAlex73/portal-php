<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Set extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'set';
//        return \App\Settings\Set::class;
    }
}
