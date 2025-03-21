<?php

namespace App\UseCases;

use App\Entities\OfferHubEntity;
use App\Events\ExportOfferEvent;
use App\Events\GetOffersEvent;
use App\Events\ImportOfferEvent;
use App\Repositories\Interfaces\OfferRepositoryInterface;
use App\Services\Interfaces\HubServiceInterface;
use App\Services\Interfaces\MarketplaceServiceInterface;
use App\UseCases\Interfaces\OfferUseCaseInterface;

class OfferUseCase implements OfferUseCaseInterface
{
    public function __construct(
        private readonly MarketplaceServiceInterface $marketplaceService,
        private readonly OfferRepositoryInterface $offerRepository,
        private readonly HubServiceInterface $hubService,
    ) {}

    /**
     * {@inheritDoc}
     */
    public function requestOffers(): void
    {
        GetOffersEvent::dispatch();
    }

    /**
     * {@inheritDoc}
     */
    public function getOffers(): void
    {
        $page = 1;
        do {
            $offers = $this->marketplaceService->getOffers($page);
            $totalPages = data_get($offers, 'pagination.total_pages', 0);

            collect(data_get($offers, 'data.offers', []))
                ->each(fn ($reference) => ImportOfferEvent::dispatch($reference));

            $page++;
        } while ($page <= $totalPages);
    }

    /**
     * {@inheritDoc}
     */
    public function requestExport(int $offerId): void
    {
        ExportOfferEvent::dispatch($offerId);
    }

    /**
     * {@inheritDoc}
     */
    public function export(int $offerId): void
    {
        $offerEntity = $this->offerRepository->find($offerId);

        $offerHub = new OfferHubEntity(
            $offerEntity->title,
            $offerEntity->description,
            $offerEntity->status,
            $offerEntity->stock,
        );

        $this->hubService->createOffer($offerHub);
    }
}
