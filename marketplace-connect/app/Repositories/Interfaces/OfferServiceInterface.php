<?php

namespace App\Repositories;

use App\Repositories\Interfaces\OfferRepositoryInterface;
use Illuminate\Support\Facades\Http;

class OfferRepository implements OfferRepositoryInterface
{
    protected $baseUrl;
    protected $headers;

    public function __construct()
    {
        $this->baseUrl = config('offers.marketplace.url');
        $this->headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function getOffers(): ?string
    {
        $response = Http::withHeaders($this->headers)->get("{$this->baseUrl}/offers");
        return $response->body();
    }

    /**
     * {@inheritDoc}
     */
    public function getOfferByReference(string $reference): array
    {
        $response = Http::withHeaders($this->headers)
            ->get("{$this->baseUrl}/offers/{$reference}");
        return $response->json();
    }

    /**
     * {@inheritDoc}
     */
    public function getOfferImages(string $reference): array
    {
        $response = Http::withHeaders($this->headers)
            ->get("{$this->baseUrl}/offers/{$reference}/images");
        return $response->json();
    }

    /**
     * {@inheritDoc}
     */
    public function getOfferPrices(string $reference): array
    {
        $response = Http::withHeaders($this->headers)
            ->get("{$this->baseUrl}/offers/{$reference}/prices");
        return $response->json();
    }
}
