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
}
