<?php

namespace App\Repositories\Interfaces;

use App\Entities\OfferEntity;
interface OfferRepositoryInterface
{
    /**
     * Saves the given offer price entity to the database.
     *
     * This method creates a new record for the offer price.
     *
     * @param  OfferPriceEntity  $entity  The offer price entity to be persisted.
     */
    public function persist(OfferEntity $entity): void;

    /**
     * Find data
     */
    public function find(int $offerId): ?OfferEntity;
}
