<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use Database\Seeders\Settings\SettingsInitial;
use Illuminate\Http\Request;

class SettingController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();

        return view('admin.settings.index', ['settings' => $settings]);
    }

    public function update(Request $request)
    {
        $fields = $request->only(array_keys(SettingsInitial::getSettings()));
        $default_settings = SettingsInitial::getSettings();
        foreach ($fields as $title => $value) {
            Setting::where('title', $title)
                ->update(['value' => !empty($value) ? $value : $default_settings[$title]['value']]);
        }

        return redirect(route('settings.index'));
    }
}
