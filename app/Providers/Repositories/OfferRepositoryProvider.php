<?php

namespace App\Providers\Repositories;

use App\Repositories\Interfaces\OfferRepositoryInterface;
use App\Repositories\OfferRepository;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class OfferRepositoryProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(OfferRepositoryInterface::class, OfferRepository::class);
    }

    /**
     * @return string[]
     */
    public function provides()
    {
        return [
            OfferRepositoryInterface::class,
        ];
    }
}
