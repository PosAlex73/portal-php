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
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $user = $event->user;
        UserProfile::create([
            'user_id' => $user->id,
            'phone' => '',
            'address' => '',
            'lang' => 'en',
            'skills' => '',
            'about' => '',
            'image' => ''
        ]);

        UserSetting::create([
            'user_id' => $user->id,
            'values' => ''
        ]);

        Thread::create([
            'user_id' => $user->id,
            'status' => CommonStatuses::ACTIVE

        ]);
    }
}
