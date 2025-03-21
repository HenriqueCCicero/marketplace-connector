<?php

namespace App\Services\Interfaces;

interface MarketplaceServiceInterface
{
    /**
     * Retrieve a list of offers from the marketplace.
     *
     * @param  int  $page  The page number for paginated results. Defaults to 1 if not provided.
     * @return array An array containing the offers data.
     */
    public function getOffers(): array;

    /**
     * Retrieve details of an offer by its reference identifier.
     *
     * @param  string  $reference  The unique identifier of the offer.
     * @return array An array containing the details of the specified offer.
     */
    public function getOfferByReference(string $reference): array;

    /**
     * Retrieve images related to an offer using its reference identifier.
     *
     * @param  string  $reference  The unique identifier of the offer.
     * @return array An array containing URLs of the images.
     */
    public function getOfferImages(string $reference): array;

    /**
     * Retrieve price details of an offer using its reference identifier.
     *
     * @param  string  $reference  The unique identifier of the offer.
     * @return array An array containing pricing information.
     */
    public function getOfferPrices(string $reference): array;
}
