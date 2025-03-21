<?php

namespace App\Repositories\Interfaces;

use App\Entities\OfferPriceEntity;

interface OfferPriceRepositoryInterface
{
    /**
     * Saves the given offer price entity to the database.
     *
     * This method creates a new record for the offer price
     *
     * @param  OfferPriceEntity  $entity  The offer price entity to be persisted.
     */
    public function persist(OfferPriceEntity $entity): void;
}
