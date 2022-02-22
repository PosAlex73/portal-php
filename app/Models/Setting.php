<?php

namespace App\Models;

use App\Enums\Settings\SettingEnums;
use Database\Seeders\Settings\SettingsInitial;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'value', 'type'
    ];

    public static function saveSettings(Request $request, array $fields)
    {
        $file_types = SettingsInitial::getFileTypes();
        $default_settings = SettingsInitial::getSettings();
        foreach ($fields as $title => $value) {

            if (!in_array($title, $file_types) && !$request->hasFile($title)) {
                Setting::where('title', $title)
                    ->update(['value' => !empty($value) ? $value : $default_settings[$title]['value']]);
            } else {
               $path = $request->file($title)->store('settings', ['disk' => 'public']);
               $old_logo = DB::table('settings')->where('title', '=', SettingEnums::LOGO)->first('value');
               Storage::delete($old_logo->value);
               Setting::where('title', $title)
                   ->update(['value' => $path]);
            }
        }
    }
}
