<?php

namespace App\Repositories;

use App\Entities\OfferImageEntity;
use App\Models\OfferImage;
use App\Repositories\Interfaces\OfferImageRepositoryInterface;

/**
 * Repositório de imagens de ofertas.
 */
class OfferImageRepository implements OfferImageRepositoryInterface
{
    /**
     * Construtor.
     *
     * @param OfferImage $model
     */
    public function __construct(
        private readonly OfferImage $model,
    ) {}

    /**
     * {@inheritDoc}
     */
    public function persist(OfferImageEntity $entity): void
    {
        $this->model->create([
            'offer_id' => $entity->offerId,
            'photo_url' => $entity->imageUrl,
        ]);
    }
}
