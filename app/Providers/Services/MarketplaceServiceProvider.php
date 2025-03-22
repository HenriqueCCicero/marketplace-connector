<?php

namespace App\Providers\Services;

use App\Services\Interfaces\MarketplaceServiceInterface;
use App\Services\MarketplaceService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class MarketplaceServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Registra o serviço no container de serviços.
     */
    public function register(): void
    {
        $this->app->bind(MarketplaceServiceInterface::class, MarketplaceService::class);
    }

    /**
     * Obtém os serviços fornecidos pelo provedor.
     *
     * @return void
     */
    public function provides()
    {
        return [
            MarketplaceServiceInterface::class,
        ];
    }
}
