<?php

namespace App\Listeners;

use App\Events\ImportOfferEvent;
use App\Jobs\ImportOfferJob;

class ImportOfferListener
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
    public function handle(ImportOfferEvent $event): void
    {
        ImportOfferJob::dispatch($event->reference);
    }
}
