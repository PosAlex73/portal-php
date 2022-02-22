<?php

namespace App\Enums;

class SettingTypes
{
    use Enumuble;

    public const SELECT = 'select';
    public const INPUT = 'input';
    public const TEXTAREA = 'textarea';
    public const CHECKBOX = 'checkbox';
    public const RADIO = 'radio';
    public const NUMBER = 'number';
    public const FILE = 'file';
    public const IMAGE = 'image';
}
