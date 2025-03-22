<?php

namespace App\States;

use App\States\Interfaces\OfferStateInterface;

/**
 * Gerenciador de estados de oferta.
 */
class OfferStateManager
{
    private OfferStateInterface $state;

    /**
     * Seta o estado atual.
     *
     * @param OfferStateInterface $state
     * @return void
     */
    public function setState(OfferStateInterface $state): void
    {
        $this->state = $state;
        $state->notify();
    }

    /**
     * Retorna o estado atual.
     *
     * @return OfferStateInterface
     */
    public function getState(): OfferStateInterface
    {
        return $this->state;
    }
}
