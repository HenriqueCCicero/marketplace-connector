<?php

namespace App\UseCases;

use App\Entities\OfferEntity;
use App\Entities\OfferImageEntity;
use App\Entities\OfferPriceEntity;
use App\Repositories\Interfaces\OfferImageRepositoryInterface;
use App\Repositories\Interfaces\OfferPriceRepositoryInterface;
use App\Repositories\Interfaces\OfferRepositoryInterface;
use App\Services\Interfaces\MarketplaceServiceInterface;
use App\UseCases\Interfaces\OfferPersistUseCaseInterface;
use Illuminate\Support\Collection;

class OfferPersistUseCase implements OfferPersistUseCaseInterface
{
    public function __construct(
        private readonly MarketplaceServiceInterface $marketplaceService,
        private readonly OfferRepositoryInterface $offerRepository,
        private readonly OfferImageRepositoryInterface $offerImageRepository,
        private readonly OfferPriceRepositoryInterface $offerPriceRepository,
    ) {}

    /**
     * {@inheritDoc}
     */
    public function import(int $offerId): void
    {
        $offerDatabase = $this->offerRepository->find($offerId);

        if (empty($offerDatabase)) {
            $offerEntity = $this->getDetails($offerId);
            $this->offerRepository->persist($offerEntity);
        }

        if (empty(data_get($offerDatabase, 'images'))) {
            $this->getImages($offerId)
                ->each(fn (OfferImageEntity $entity) => $this->offerImageRepository->persist($entity));
        }

        if (!empty(data_get($offerDatabase, 'prices'))) {
            return;
        }

        $priceEntity = $this->getPrices($offerId);
        $this->offerPriceRepository->persist($priceEntity);
    }

    /**
     * Request in API Offer and transform entity
     */
    private function getDetails(int $offerId): OfferEntity
    {
        $response = $this->marketplaceService->getOfferByReference($offerId);
        $data = data_get($response, 'data');

        return OfferEntity::hydrate((object) $data);
    }

    /**
     * Request in API Offer and make collection of entity
     */
    private function getImages(int $offerId): Collection
    {
        $response = $this->marketplaceService->getOfferImages($offerId);

        return collect(data_get($response, 'data.images'))
            ->map(function ($image) use ($offerId) {
                return new OfferImageEntity(
                    $offerId,
                    data_get($image, 'url')
                );
            });
    }

    /**
     * Request in API Offer and make collection of entity
     */
    private function getPrices(int $offerId): OfferPriceEntity
    {
        $response = $this->marketplaceService->getOfferPrices($offerId);

        return new OfferPriceEntity(
            $offerId,
            data_get($response, 'data.price')
        );
    }
}
