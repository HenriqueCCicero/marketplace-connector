<?php

namespace App\Repositories\Interfaces;

use App\Entities\OfferEntity;
interface OfferRepositoryInterface
{
    /**
     * Save data
     */
    public function persist(OfferEntity $entity): void;

    /**
     * Find data
     */
    public function find(int $offerId): ?OfferEntity;
}
