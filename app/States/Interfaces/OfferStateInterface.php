<?php

namespace App\States\Interfaces;

interface OfferStateInterface
{
    /**
     * Notifica o estado atual.
     */
    public function notify(): void;
}
