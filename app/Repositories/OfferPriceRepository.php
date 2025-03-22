<?php

namespace App\Repositories;

use App\Entities\OfferPriceEntity;
use App\Models\OfferPrice;
use App\Repositories\Interfaces\OfferPriceRepositoryInterface;

/**
 * Repositório de preços de ofertas.
 */
class OfferPriceRepository implements OfferPriceRepositoryInterface
{
    /**
     * Construtor.
     *
     * @param OfferPrice $model
     */
    public function __construct(
        private readonly OfferPrice $model
    ) {}

    /**
     * {@inheritDoc}
     */
    public function persist(OfferPriceEntity $entity): void
    {
        $this->model->create([
            'offer_id' => $entity->offerId,
            'price' => $entity->price,
        ]);
    }
}
