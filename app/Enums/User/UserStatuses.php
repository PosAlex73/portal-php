<?php

namespace App\Enums\User;

use App\Enums\Enumuble;

class UserStatuses
{
    use Enumuble;

    public const ACTIVE = 'A';
    public const DISABLED = 'D';
    public const BANNED = 'B';
}
