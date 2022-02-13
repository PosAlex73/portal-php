<?php

namespace App\Models;

use Database\Seeders\Settings\UserSettingInitial;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'value', 'type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function mergeSettings(array $user_settings)
    {

        $default_user_settings = UserSettingInitial::getUserSettings();

        foreach ($default_user_settings as $setting_key => $_) {
            $default_user_settings[$setting_key]['value'] = $user_settings[$setting_key];
        }

        return $default_user_settings;
    }
}
