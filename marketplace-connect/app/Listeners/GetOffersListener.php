<?php

namespace App\Listeners;

use App\Events\GetOffersEvent;
use App\Jobs\GetOffersJob;

class GetOffersListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(GetOffersEvent $event): void
    {
        GetOffersJob::dispatch();
    }
}
