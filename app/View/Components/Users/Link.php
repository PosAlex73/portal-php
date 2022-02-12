<?php

namespace App\View\Components\Users;

use App\Models\User;
use Illuminate\View\Component;

class Link extends Component
{
    public $tab;
    public $user;
    public $link;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tab, $user)
    {
        $this->tab = $tab;
        $this->user = $user;
        $this->link = route($tab['link'], ['tab' => __($tab['name']), 'user' => $user]);
        $this->name = __($tab['name']);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.users.link');
    }
}
