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
    public $label;
    public $help;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($setting)
    {
        $this->setting = $setting;
        $this->name = 'values[' . $setting['title'] . ']';
        $this->value = $setting['value'];
        $this->type = $setting['type'];
        $this->label = 'label' . $setting['title'];
        $this->help = '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return ('components.fields.' . $this->type);
    }
}
