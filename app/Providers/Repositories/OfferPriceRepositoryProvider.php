<?php

namespace App\Providers\Repositories;

use App\Repositories\Interfaces\OfferPriceRepositoryInterface;
use App\Repositories\OfferPriceRepository;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class OfferPriceRepositoryProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(OfferPriceRepositoryInterface::class, OfferPriceRepository::class);
    }

    /**
     * @return string[]
     */
    public function provides()
    {
        return [
            OfferPriceRepositoryInterface::class,
        ];
    }
}
