<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;

class Langs extends Component
{
    public $langs;
    public $selected_lang;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($lang = '')
    {
        $this->langs = \App\Enums\Langs::getAll();
        $this->selected_lang = $lang;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.langs');
    }
}
