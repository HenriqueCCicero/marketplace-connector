<?php

namespace App\Repositories;

use App\Entities\OfferImageEntity;
use App\Models\OfferImage;
use App\Repositories\Interfaces\OfferImageRepositoryInterface;

class OfferImageRepository implements OfferImageRepositoryInterface
{
    public function __construct(
        private readonly OfferImage $model,
    ) {}

    public function persist(OfferImageEntity $entity): void
    {
        $this->model->create([
            'offer_id' => $entity->offerId,
            'photo_url' => $entity->imageUrl,
        ]);
    }
}
