<?php

namespace App\Listeners;

use App\Enums\CommonStatuses;
use App\Models\User;
use App\Notifications\User\NewUser;

class CreateUserProfile
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        /** @var User $user */
        $user = $event->user;
        $user->profile()->create([
            'phone' => '',
            'address' => '',
            'lang' => 'en',
            'skills' => '',
            'about' => '',
            'image' => ''
        ]);

        $user->settings()->create([
            'values' => ''
        ]);

        $user->thread()->create([
            'status' => CommonStatuses::ACTIVE
        ]);

        $user->notify(new NewUser());
    }
}
