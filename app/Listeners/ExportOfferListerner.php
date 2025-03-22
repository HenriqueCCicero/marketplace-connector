<?php

namespace App\Listeners;

use App\Events\ExportOfferEvent;
use App\Jobs\ExportOfferJob;

class ExportOfferListerner
{
    /**
     * Hadle do evento de exportação de oferta.
     */
    public function handle(ExportOfferEvent $event): void
    {
        ExportOfferJob::dispatch($event->offerId);
    }
}
