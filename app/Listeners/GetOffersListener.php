<?php

namespace App\Listeners;

use App\Events\GetOffersEvent;
use App\Jobs\GetOffersJob;

class GetOffersListener
{
    /**
     * Handle do evento.
     */
    public function handle(GetOffersEvent $event): void
    {
        GetOffersJob::dispatch();
    }
}
