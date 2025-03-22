<?php

namespace App\Repositories\Interfaces;

use App\Entities\OfferImageEntity;

interface OfferImageRepositoryInterface
{
    /**
     * Salva a entidade de imagem da oferta no banco de dados.
     *
     * Este método cria um novo registro para a imagem da oferta.
     *
     * @param  OfferImageEntity  $entity  A entidade de imagem da oferta a ser persistida.
     */
    public function persist(OfferImageEntity $entity): void;
}
