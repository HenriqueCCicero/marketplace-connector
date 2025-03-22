<?php

namespace App\Providers\Repositories;

use App\Repositories\Interfaces\OfferPriceRepositoryInterface;
use App\Repositories\OfferPriceRepository;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class OfferPriceRepositoryProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Registra o serviço no container de serviços.
     */
    public function register(): void
    {
        $this->app->bind(OfferPriceRepositoryInterface::class, OfferPriceRepository::class);
    }

    /**
     * Obtém os serviços fornecidos pelo provedor.
     *
     * @return void
     */
    public function provides()
    {
        return [
            OfferPriceRepositoryInterface::class,
        ];
    }
}
