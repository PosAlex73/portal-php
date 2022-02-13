<?php

namespace App\View\Components\Inputs;

use App\Enums\SettingTypes;
use Illuminate\View\Component;

class UserSettingFields extends Component
{
    public $setting;
    public $name;
    public $value;
    public $type;
    public $variants;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($setting)
    {
        $this->setting = $setting;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return ('');
    }
}
