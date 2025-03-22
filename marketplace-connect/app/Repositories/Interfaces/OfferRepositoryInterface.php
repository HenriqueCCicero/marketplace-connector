<?php

namespace App\Repositories\Interfaces;

use App\Entities\OfferEntity;

interface OfferRepositoryInterface
{
    /**
     * Salva a entidade de oferta fornecida no banco de dados.
     *
     * Este método cria um novo registro ou atualiza um existente
     * com base no identificador único da entidade de oferta.
     *
     * @param  OfferEntity  $entity  A entidade de oferta a ser persistida.
     */
    public function persist(OfferEntity $entity): void;

    /**
     * Encontra uma entidade de oferta pelo seu identificador único.
     *
     * Este método recupera a oferta do banco de dados junto com seus preços
     * e imagens associados. Se nenhuma oferta for encontrada, retorna null.
     *
     * @param  int  $offerId  O identificador único da oferta a ser encontrada.
     * @return OfferEntity|null A entidade de oferta, se encontrada, ou null caso contrário.
     */
    public function find(int $offerId): ?OfferEntity;
}
