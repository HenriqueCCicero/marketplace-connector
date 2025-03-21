<?php

namespace App\States\Interfaces;

interface OfferStateInterface
{
    public function notify(int $offerId): void;
}
