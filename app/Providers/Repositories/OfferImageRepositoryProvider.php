<?php

namespace App\Providers\Repositories;

use App\Repositories\Interfaces\OfferImageRepositoryInterface;
use App\Repositories\OfferImageRepository;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class OfferImageRepositoryProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Registra o serviço no container de serviços.
     */
    public function register(): void
    {
        $this->app->bind(OfferImageRepositoryInterface::class, OfferImageRepository::class);
    }

    /**
     * Obtém os serviços fornecidos pelo provedor.
     *
     * @return void
     */
    public function provides()
    {
        return [
            OfferImageRepositoryInterface::class,
        ];
    }
}
