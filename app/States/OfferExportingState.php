<?php

namespace App\States;

use App\Events\ExportOfferEvent;
use App\States\Interfaces\OfferStateInterface;

class OfferExportingState implements OfferStateInterface
{
    public function __construct(
        private int $offerId
    ) {}

    public function notify(): void
    {
        ExportOfferEvent::dispatch($this->offerId);
    }
}
