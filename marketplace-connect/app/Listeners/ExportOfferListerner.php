<?php

namespace App\Listeners;

use App\Events\ExportOfferEvent;
use App\Jobs\ExportOfferJob;

class ExportOfferListerner
{
    /**
     * Handle the event.
     */
    public function handle(ExportOfferEvent $event): void
    {
        ExportOfferJob::dispatch($event->offerId);
    }
}
