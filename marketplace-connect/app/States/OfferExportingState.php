<?php

namespace App\States;

use App\Events\ExportOfferEvent;
use App\States\Interfaces\OfferStateInterface;

class OfferExportingState implements OfferStateInterface
{
    public function notify(int $offerId): void
    {
        ExportOfferEvent::dispatch($offerId);
    }
}
