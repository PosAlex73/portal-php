<?php

namespace App\Models;

use Database\Seeders\Settings\SettingsInitial;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'value', 'type'
    ];
}
