<?php

namespace App\Http\Controllers;

use App\UseCases\Interfaces\OfferUseCaseInterface;

class ImportOffersController extends Controller
{
    /**
     * Construtor da OfferUseCase.
     */
    public function __construct(
        private readonly OfferUseCaseInterface $offerUseCase
    ) {}

    /**
     * Importa as ofertas.
     */
    public function __invoke(): void
    {
        $this->offerUseCase->getOffers();
    }
}
