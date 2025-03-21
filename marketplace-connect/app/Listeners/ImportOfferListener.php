<?php

namespace App\Listeners;

use App\Events\ImportOfferEvent;
use App\Jobs\ImportOfferJob;

class ImportOfferListener
{
    /**
     * Handle the event.
     */
    public function handle(ImportOfferEvent $event): void
    {
        ImportOfferJob::dispatch($event->offerId);
    }
}
