<?php

namespace App\Enums;

class UserTypes
{
    use Enumuble;

    public const ADMIN = 'A';
    public const SIMPLE = 'S';
    public const MODERATOR = 'M';
}
