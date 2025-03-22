<?php

namespace App\Listeners;

use App\Events\ImportOfferEvent;
use App\Jobs\ImportOfferJob;

class ImportOfferListener
{
    /**
     * Handle do evento de importação de oferta.
     */
    public function handle(ImportOfferEvent $event): void
    {
        ImportOfferJob::dispatch($event->offerId);
    }
}
