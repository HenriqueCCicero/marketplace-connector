<?php

namespace App\Repositories\Interfaces;

use App\Entities\OfferPriceEntity;

interface OfferPriceRepositoryInterface
{
    /**
     * Save data
     */
    public function persist(OfferPriceEntity $entity): void;
}
