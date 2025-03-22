<?php

namespace App\States;

use App\Events\ImportOfferEvent;
use App\States\Interfaces\OfferStateInterface;

class OfferCreatingState implements OfferStateInterface
{
    public function __construct(
        private int $offerId
    ) {}

    public function notify(): void
    {
        ImportOfferEvent::dispatch($this->offerId);
    }
}
