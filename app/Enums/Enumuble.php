<?php

namespace App\Enums;

trait Enumuble
{
    public static function getAll()
    {
        $ref = new \ReflectionClass(__CLASS__);

        return $ref->getConstants();
    }
}
