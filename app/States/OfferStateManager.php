<?php

namespace App\States;

use App\States\Interfaces\OfferStateInterface;

class OfferStateManager
{
    private OfferStateInterface $state;

    public function setState(OfferStateInterface $state): void
    {
        $this->state = $state;
        $state->notify();
    }

    public function getState(): OfferStateInterface
    {
        return $this->state;
    }
}
