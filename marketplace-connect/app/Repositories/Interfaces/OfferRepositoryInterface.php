<?php

namespace App\Repositories\Interfaces;

interface OfferRepositoryInterface
{
    /**
     * Get offers.
     */
    public function getOffers(): ?string;

    /**
     * Get offer by reference.
     */
    public function getOfferByReference(string $reference): array;

    /**
     * Get offer images.
     */
    public function getOfferImages(string $reference): array;

    /**
     * Get offer prices.
     */
    public function getOfferPrices(string $reference): array;
}
