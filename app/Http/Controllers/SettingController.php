<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;

class SettingController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::paginate(static::getPaginate());

        return view('admin.settings.index', ['settings' => $settings]);
    }

    public function update(UpdateSettingRequest $request, Setting $setting)
    {

    }
}
