<?php

namespace App\UseCases\Interfaces;

interface OfferUseCaseInterface
{
    /**
     * Request offers.
     */
    public function requestOffers(): void;

    /**
     * Get offers.
     */
    public function getOffers(): void;

    /**
     * Export all offers.
     */
    public function requestExport(int $offerId): void;

    /**
     * Export all offers.
     */
    public function export(int $offerId): void;
}
