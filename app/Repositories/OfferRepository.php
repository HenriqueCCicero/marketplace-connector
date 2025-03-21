<?php

namespace App\Repositories;

use App\Entities\OfferEntity;
use App\Models\Offer;
use App\Repositories\Interfaces\OfferRepositoryInterface;

/**
 * Repositório de ofertas.
 */
class OfferRepository implements OfferRepositoryInterface
{
    /**
     * Construtor.
     *
     * @param Offer $model
     */
    public function __construct(
        private readonly Offer $model,
    ) {}

    /**
     * {@inheritDoc}
     */
    public function persist(OfferEntity $entity): void
    {
        $this->model->updateOrCreate(
            ['id' => $entity->id],
            [
                'title' => $entity->title,
                'description' => $entity->description,
                'status' => $entity->status,
                'stock' => $entity->stock,
            ]
        );
    }

    /**
     * {@inheritDoc}
     */
    public function find(int $offerId): ?OfferEntity
    {
        $data = $this->model
            ->with('prices', 'images')
            ->find($offerId);

        if (empty($data)) {
            return null;
        }

        return OfferEntity::hydrate(
            (object) $data->toArray()
        );
    }
}
