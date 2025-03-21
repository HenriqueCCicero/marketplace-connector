<?php

namespace App\Services;

use App\Entities\OfferHubEntity;
use App\Services\Interfaces\HubServiceInterface;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
/**
 * Serviço de integração com o hub.
 */
class HubService implements HubServiceInterface
{
    private PendingRequest $client;

    /**
     * Construtor.
     */
    public function __construct()
    {
        $this->client = Http::baseUrl(config('hub.url'))
            ->asJson()
            ->acceptJson();
    }

    /**
     * {@inheritDoc}
     */
    public function createOffer(OfferHubEntity $entity): void
    {
        $data = $this->client->post(
            '/hub/create-offer',
            $entity->dehydration()
        );
    }
}
