<?php

namespace App\UseCases;

use App\Entities\OfferHubEntity;
use App\Events\GetOffersEvent;
use App\Repositories\Interfaces\OfferRepositoryInterface;
use App\Services\Interfaces\HubServiceInterface;
use App\Services\Interfaces\MarketplaceServiceInterface;
use App\States\OfferCreatingState;
use App\States\OfferExportingState;
use App\States\OfferStateManager;
use App\UseCases\Interfaces\OfferUseCaseInterface;

/**
 * Casos de uso de oferta.
 */
class OfferUseCase implements OfferUseCaseInterface
{
    /**
     * Construtor.
     *
     * @param MarketplaceServiceInterface $marketplaceService
     * @param OfferRepositoryInterface $offerRepository
     * @param HubServiceInterface $hubService
     * @param OfferStateManager $offerStateManager
     */
    public function __construct(
        private readonly MarketplaceServiceInterface $marketplaceService,
        private readonly OfferRepositoryInterface $offerRepository,
        private readonly HubServiceInterface $hubService,
        private readonly OfferStateManager $offerStateManager,
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

            $offerIds = collect(data_get($offers, 'data.offers'));

            $offerIds->chunk(10)->each(function ($chunk) {
                $chunk->each(function (int $offerId) {
                    $this->offerStateManager->setState(new OfferCreatingState($offerId));

                });
            });

            $page++;
        } while ($page <= $totalPages);
    }

    /**
     * {@inheritDoc}
     */
    public function requestExport(int $offerId): void
    {
        $this->offerStateManager->setState(new OfferExportingState($offerId));
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
