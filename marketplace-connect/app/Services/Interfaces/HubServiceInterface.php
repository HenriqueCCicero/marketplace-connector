<?php

namespace App\Services\Interfaces;

use App\Entities\OfferHubEntity;

interface HubServiceInterface
{
    /**
     * Get offers.
     */
    public function createOffer(OfferHubEntity $entity): void;
}
