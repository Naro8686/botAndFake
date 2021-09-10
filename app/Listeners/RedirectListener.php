<?php

namespace App\Listeners;

use App\Events\RedirectEvent;
use Cache;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RedirectListener
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


    public function handle(RedirectEvent $event)
    {
        Cache::put("$event->uuid.redirectUrl", $event->redirectUrl);
    }
}
