<?php

namespace App\Providers\Services;

use App\Services\Interfaces\MarketplaceServiceInterface;
use App\Services\MarketplaceService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class MarketplaceServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MarketplaceServiceInterface::class, MarketplaceService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        return[
            MarketplaceServiceInterface::class
        ];
    }
}
