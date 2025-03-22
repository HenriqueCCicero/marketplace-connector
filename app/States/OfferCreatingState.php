<?php

namespace App\States;

use App\Events\ImportOfferEvent;
use App\States\Interfaces\OfferStateInterface;

class OfferCreatingState implements OfferStateInterface
{
    public function notify(int $offerId): void
    {
        ImportOfferEvent::dispatch($offerId);
    }
}
