<?php

namespace App\View\Components;

use App\Models\Setting;
use Database\Seeders\Settings\SettingsInitial;
use Illuminate\View\Component;

class Settings extends Component
{
    public static array $setting_attrs;
    public $setting;
    public $name;
    public $label;
    public $value;
    public $help;
    public $type;
    public $variants = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Setting $setting)
    {
        if (empty(static::$setting_attrs)) {
            static::$setting_attrs = SettingsInitial::getSettings();
        }

        $this->setting = $setting;
        $this->name = $setting->title;
        $this->label = __('settings.' . $setting->title);
        $this->type = $setting->type;
        $this->help = __('settings.help_' . $setting->title);
        $this->value = $setting->value;
        $this->variants = static::$setting_attrs[$setting->title]['variants'] ?? [];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.fields.' . $this->type);
    }
}
