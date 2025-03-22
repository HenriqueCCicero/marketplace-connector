<?php

namespace App\UseCases\Interfaces;

interface OfferUseCaseInterface
{
    /**
     * Despacha um evento para solicitar ofertas do marketplace.
     *
     * Este método dispara o evento GetOffersEvent, que lida com o processo de obtenção de ofertas.
     */
    public function requestOffers(): void;

    /**
     * Obtém ofertas do marketplace e altera o estado de cada oferta para 'creating'.
     *
     * Este método recupera dados paginados de ofertas e, para cada oferta, cria uma `OfferEntity` e define
     * seu estado como `OfferCreatingState`, o que subsequentemente dispara o evento `ImportOfferEvent`.
     * O método continua buscando até que todas as páginas disponíveis sejam processadas.
     */
    public function getOffers(): void;

    /**
     * Altera o estado de uma oferta específica para 'exporting' e inicia o processo de exportação.
     *
     * Este método define o estado da oferta como `OfferExportingState`, o que, por sua vez, despacha
     * o evento `ExportOfferEvent` para processamento adicional.
     *
     * @param  int  $offerId  O identificador único da oferta a ser exportada.
     */
    public function requestExport(int $offerId): void;

    /**
     * Exporta uma oferta para o hub.
     *
     * Este método recupera uma oferta pelo seu ID do repositório, converte-a em uma OfferHubEntity,
     * e a envia para o serviço do hub para criação.
     *
     * @param  int  $offerId  O identificador único da oferta a ser exportada.
     */
    public function export(int $offerId): void;
}
