<?php

namespace App\UseCases\Interfaces;

interface OfferPersistUseCaseInterface
{
    /**
     * Importa todos os detalhes de uma oferta especificada.
     *
     * Este método busca os detalhes, imagens e preços da oferta no marketplace
     * e os persiste no banco de dados. Se a oferta já existir no banco de dados, ele atualiza
     * apenas as informações que estão faltando.
     *
     * @param  int  $offerId  O identificador único da oferta a ser importada.
     */
    public function import(int $offerId): void;
}
