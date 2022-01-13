<?php

namespace App\Providers;

use App\Events\RedirectEvent;
use App\Listeners\RedirectListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        RedirectEvent::class => [
            RedirectListener::class,
        ],
        'Illuminate\Mail\Events\MessageSending' => [
            'App\Listeners\CheckEmailPreferences',
        ],
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
