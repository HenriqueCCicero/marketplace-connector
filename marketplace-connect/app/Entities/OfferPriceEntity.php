<?php

namespace App\Entities;

class OfferPriceEntity
{
    public function __construct(
        public readonly int $offerId,
        public readonly string $price
    ) {}
}
