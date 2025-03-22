<?php

namespace App\Jobs;

use App\UseCases\Interfaces\OfferUseCaseInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GetOffersJob implements ShouldBeUnique, ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Executa a Job.
     */
    public function handle(OfferUseCaseInterface $offerUseCase): void
    {
        $offerUseCase->getOffers();
    }
}
