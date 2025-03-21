<?php

namespace App\Repositories;

use App\Entities\OfferPriceEntity;
use App\Models\OfferPrice;
use App\Repositories\Interfaces\OfferPriceRepositoryInterface;

class OfferPriceRepository implements OfferPriceRepositoryInterface
{
    public function __construct(
        private readonly OfferPrice $model
    ) {}

    public function persist(OfferPriceEntity $entity): void
    {
        $this->model->create([
            'offer_id' => $entity->offerId,
            'price' => $entity->price,
        ]);
    }
}
