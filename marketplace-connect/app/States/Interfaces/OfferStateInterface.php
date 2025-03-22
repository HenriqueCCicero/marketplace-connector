<?php

namespace App\States\Interfaces;

interface OfferStateInterface
{
    /**
     * Notifica o estado atual.
     */
    public function notify(int $offerId): void;
}
