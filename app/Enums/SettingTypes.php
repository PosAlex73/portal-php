<?php

namespace App\Enums;

class SettingTypes
{
    use Enumuble;

    public const SELECT = 'S';
    public const INPUT = 'I';
    public const TEXTAREA = 'A';
    public const CHECKBOX = 'C';
    public const RADIO = 'R';
    public const NUMBER = 'N';
    public const FILE = 'F';
    public const IMAGE = 'I';
}
