<?php

namespace App\Repositories\Interfaces;

use App\Entities\OfferImageEntity;

interface OfferImageRepositoryInterface
{
    /**
     * Saves the given offer image entity to the database.
     *
     * This method creates a new record for the offer image.
     *
     * @param  OfferImageEntity  $entity  The offer image entity to be persisted
     */
    public function persist(OfferImageEntity $entity): void;
}
