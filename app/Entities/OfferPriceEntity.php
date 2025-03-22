<?php

namespace App\Entities;

class OfferPriceEntity
{
    /**
     * Construtor da OfferPriceEntity.
     *
     * @param  string  $offerId
     * @param  string  $imageUrl
     */
    public function __construct(
        public readonly int $offerId,
        public readonly string $price
    ) {}
}
