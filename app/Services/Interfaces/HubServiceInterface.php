<?php

namespace App\Services\Interfaces;

use App\Entities\OfferHubEntity;

interface HubServiceInterface
{
    /**
     * Cria uma nova oferta no hub.
     *
     * Este método envia uma solicitação para o serviço hub para criar uma oferta
     * usando a OfferHubEntity fornecida.
     *
     * @param  OfferHubEntity  $entity  A entidade da oferta a ser criada no hub.
     * @return void
     */
    public function createOffer(OfferHubEntity $entity): void;
}
