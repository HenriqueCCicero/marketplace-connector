<?php

namespace App\Providers\Repositories;

use App\Repositories\Interfaces\OfferRepositoryInterface;
use App\Repositories\OfferRepository;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class OfferRepositoryProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Registra o serviço no container de serviços.
     */
    public function register(): void
    {
        $this->app->bind(OfferRepositoryInterface::class, OfferRepository::class);
    }

    /**
     * Obtém os serviços fornecidos pelo provedor.
     *
     * @return void
     */
    public function provides()
    {
        return [
            OfferRepositoryInterface::class,
        ];
    }
}
