<?php

namespace App\Providers\Services;

use App\Services\Interfaces\MarketplaceServiceInterface;
use App\Services\MarketplaceService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class MarketplaceServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(MarketplaceServiceInterface::class, MarketplaceService::class);
    }

    /**
     * @return string[]
     */
    public function provides()
    {
        return [
            MarketplaceServiceInterface::class,
        ];
    }
}
