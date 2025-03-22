<?php

namespace App\Services\Interfaces;

interface MarketplaceServiceInterface
{
    /**
     * Recupera uma lista de ofertas do marketplace.
     *
     * @param  int  $page  O número da página para resultados paginados. Padrão é 1 se não fornecido.
     * @return array Um array contendo os dados das ofertas.
     */
    public function getOffers(): array;

    /**
     * Recupera os detalhes de uma oferta pelo seu identificador de referência.
     *
     * @param  string  $reference  O identificador único da oferta.
     * @return array Um array contendo os detalhes da oferta especificada.
     */
    public function getOfferByReference(string $reference): array;

    /**
     * Recupera as imagens relacionadas a uma oferta usando seu identificador de referência.
     *
     * @param  string  $reference  O identificador único da oferta.
     * @return array Um array contendo as URLs das imagens.
     */
    public function getOfferImages(string $reference): array;

    /**
     * Recupera os detalhes de preços de uma oferta usando seu identificador de referência.
     *
     * @param  string  $reference  O identificador único da oferta.
     * @return array Um array contendo as informações de preços.
     */
    public function getOfferPrices(string $reference): array;
}
