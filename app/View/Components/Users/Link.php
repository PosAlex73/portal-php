<?php

namespace App\View\Components\Users;

use App\Models\User;
use Illuminate\View\Component;

class Link extends Component
{
    public $tab;
    public User $user;
    public $link;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tab, User $user)
    {
        $this->tab = $tab;
        $this->user = $user;
        $this->link = route($tab['link'], $this->getAdditionalParams($tab['name']));
        $this->name = __($tab->name);
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

    private function getAdditionalParams($tab_name)
    {
        switch ($tab_name){
            case 'user_link.list':
            case 'settings.list':
            case 'user_contact.list':
            case 'user_edit':
                return ['user' => $this->user];
            case 'user_profile_edit':
                return ['user' => $this->user, 'profile' => $this->user->profile];
            case 'thread.thread':
                return ['thread' => $this->user->thread];
        }
    }
}
