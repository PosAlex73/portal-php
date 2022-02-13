<?php

namespace App\Listeners;

use App\Enums\CommonStatuses;
use App\Models\Thread;
use App\Models\UserLinks;
use App\Models\UserProfile;
use App\Models\UserSetting;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
    }
}
