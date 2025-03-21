<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UseCases\Interfaces\OfferUseCaseInterface;

class ImportOffersController extends Controller
{

    public function __construct(private readonly OfferUseCaseInterface $offerUseCase)
  {
    //
  }

  public function __invoke(): void
  {
    $this->offerUseCase->getOffers();
  }
}
