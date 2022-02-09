<?php

namespace App\Providers;

use App\Events\ArticlePublished;
use App\Events\Contacted;
use App\Events\ThreadMessage;
use App\Listeners\ArticleNotification;
use App\Listeners\ContactNotification;
use App\Listeners\CreateUserProfile;
use App\Listeners\ThreadNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            CreateUserProfile::class
        ],
        Contacted::class => [
            ContactNotification::class
        ],
        ThreadMessage::class => [
            ThreadNotification::class
        ],
        ArticlePublished::class => [
            ArticleNotification::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
