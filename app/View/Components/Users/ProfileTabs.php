<?php

namespace App\View\Components\Users;

use App\Models\User;
use Illuminate\View\Component;

class ProfileTabs extends Component
{
    public $user_tabs;
    public User $user;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($userTabs, User $user)
    {
        $this->user_tabs = $userTabs;
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.users.profile-tabs');
    }
}
