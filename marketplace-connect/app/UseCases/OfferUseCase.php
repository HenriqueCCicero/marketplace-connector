<?php

namespace App\UseCases;

use App\Events\GetOffersEvent;
use App\Events\ImportOfferEvent;
use App\Repositories\Interfaces\OfferRepositoryInterface;
use App\Services\Interfaces\MarketplaceServiceInterface;
use App\UseCases\Interfaces\OfferUseCaseInterface;

class OfferUseCase implements OfferUseCaseInterface
{
    public function __construct(
        private readonly MarketplaceServiceInterface $offerService,
        private readonly OfferRepositoryInterface $offerRepository
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
            $offers = $this->offerService->getOffers($page);
            $totalPages = data_get($offers, 'pagination.total_pages', 0);

            collect(data_get($offers, 'data.offers', []))
                ->each(fn ($reference) => ImportOfferEvent::dispatch($reference));

            $page++;
        } while ($page <= $totalPages);
    }
}
