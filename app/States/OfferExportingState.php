<?php

namespace App\States;

use App\Events\ExportOfferEvent;
use App\States\Interfaces\OfferStateInterface;

/**
 * Estado de exportação de oferta.
 */
class OfferExportingState implements OfferStateInterface
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
     * Notifica a exportação da oferta.
     *
     * @return void
     */
    public function notify(): void
    {
        ExportOfferEvent::dispatch($this->offerId);
    }
}
