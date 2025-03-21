<?php

namespace App\UseCases\Interfaces;

interface OfferPersistUseCaseInterface
{
    /**
     * Import all offers details
     */
    public function import(int $offerId): void;
}
