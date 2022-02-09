<?php

namespace App\Listeners;

use App\Events\Contacted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ContactNotification
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
     * @param  \App\Events\Contacted  $event
     * @return void
     */
    public function handle(Contacted $event)
    {
        $user = $event->user;
        $contact = $event->contact;

        Mail::to($user)->send(new \App\Mail\Contacted($user));
    }
}
