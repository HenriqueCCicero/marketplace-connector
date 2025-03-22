<?php

namespace App\Repositories\Interfaces;

use App\Entities\OfferPriceEntity;

interface OfferPriceRepositoryInterface
{
    /**
    * Salva a entidade de preço da oferta no banco de dados.
    *
    * Este método cria um novo registro para o preço da oferta.
     *
     * @param  OfferPriceEntity  $entity  A entidade de preço da oferta a ser persistida.
     */
    public function persist(OfferPriceEntity $entity): void;
}
