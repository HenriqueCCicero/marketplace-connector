<?php

namespace App\Services;

use App\Services\Interfaces\MarketplaceServiceInterface;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class MarketplaceService implements MarketplaceServiceInterface
{
    private PendingRequest $client;
    public function __construct() {
        $this->client = Http::baseUrl(config('marketplace.url'))
        ->asJson()
        ->acceptJson();
    }

    /**
     * {@inheritDoc}
     */
    public function getOffers(): void {}
}
