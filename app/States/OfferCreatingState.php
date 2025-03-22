<?php

namespace App\States;

use App\Events\ImportOfferEvent;
use App\States\Interfaces\OfferStateInterface;

/**
 * Estado de criação de oferta.
 */
class OfferCreatingState implements OfferStateInterface
{
    /**
     * Construtor.
     *
     * @param int $offerId
     */
    public function __construct(
        private int $offerId
    ) {}

    /**
     * Notifica a criação da oferta.
     *
     * @return void
     */
    public function notify(): void
    {
        ImportOfferEvent::dispatch($this->offerId);
    }
}
