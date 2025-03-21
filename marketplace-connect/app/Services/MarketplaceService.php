<?php

namespace App\Services;

use App\Services\Interfaces\MarketplaceServiceInterface;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class MarketplaceService implements MarketplaceServiceInterface
{
    private PendingRequest $client;

    public function __construct()
    {
        $this->client = Http::baseUrl(config('marketplace.url'))
            ->asJson()
            ->acceptJson();
    }

    /**
     * {@inheritDoc}
     */
    public function getOffers(int $page = 1): array
    {
        $response = $this->client->get('/offers', ['page' => $page]);

        return $response->json();
    }

    /**
     * {@inheritDoc}
     */
    public function getOfferByReference(string $reference): array
    {
        $response = $this->client->get("/offers/{$reference}");

        return $response->json();

    }

    /**
     * {@inheritDoc}
     */
    public function getOfferImages(string $reference): array
    {
        $response = $this->client->get("/offers/{$reference}/images");

        return $response->json();
    }

    /**
     * {@inheritDoc}
     */
    public function getOfferPrices(string $reference): array
    {
        $response = $this->client->get("/offers/{$reference}/prices");

        return $response->json();
    }
}
