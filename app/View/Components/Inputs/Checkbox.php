<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public $name;
    public $value;
    public $label;
    public $help;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $value, $label, $help = '')
    {
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;
        $this->help = $help;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.checkbox');
    }
}
