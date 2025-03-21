<?php

namespace App\Services\Interfaces;

use App\Entities\OfferHubEntity;

interface HubServiceInterface
{
    /**
    * Creates a new offer in the hub.
    *
    * This method sends a request to the hub service to create an offer
    * using the provided OfferHubEntity.
    *
    * @param OfferHubEntity $entity The offer entity to be created in the hub.
     */
    public function createOffer(OfferHubEntity $entity): void;
}
