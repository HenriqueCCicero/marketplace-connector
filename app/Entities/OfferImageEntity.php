<?php

namespace App\Entities;

class OfferImageEntity
{
    /**
     * Construtor da OfferImageEntity.
     */
    public function __construct(
        public readonly string $offerId,
        public readonly string $imageUrl
    ) {}
}
