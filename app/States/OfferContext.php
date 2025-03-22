<?php

namespace App\States;

use App\States\Interfaces\OfferStateInterface;

class OfferContext
{
    private OfferStateInterface $state;

    public function __construct(OfferStateInterface $state)
    {
        $this->state = $state;
    }

    /**
     * Define o estado atual.
     */
    public function setState(OfferStateInterface $state): void
    {
        $this->state = $state;
    }

    /**
     * Obtém o estado atual.
     */
    public function getState(): OfferStateInterface
    {
        return $this->state;
    }

    /**
     * Notifica o estado atual.
     */
    public function notify(int $offerId): void
    {
        $this->state->notify($offerId);
    }
}
