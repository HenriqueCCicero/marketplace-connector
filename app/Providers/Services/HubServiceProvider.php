<?php

namespace App\Providers\Services;

use App\Services\HubService;
use App\Services\Interfaces\HubServiceInterface;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class HubServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Registrar o serviço no container de serviços.
     */
    public function register(): void
    {
        $this->app->bind(HubServiceInterface::class, HubService::class);
    }

    /**
     * Obtém os serviços fornecidos pelo provedor.
     *
     * @return void
     */
    public function provides()
    {
        return [
            HubServiceInterface::class,
        ];
    }
}
