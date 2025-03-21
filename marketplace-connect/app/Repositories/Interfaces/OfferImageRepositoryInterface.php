<?php

namespace App\Repositories\Interfaces;

use App\Entities\OfferImageEntity;

interface OfferImageRepositoryInterface
{
    /**
     * Save data
     */
    public function persist(OfferImageEntity $entity): void;
}
