<?php

namespace App\Providers\Repositories;

use App\Repositories\Interfaces\OfferImageRepositoryInterface;
use App\Repositories\OfferImageRepository;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class OfferImageRepositoryProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(OfferImageRepositoryInterface::class, OfferImageRepository::class);
    }

    /**
     * @return string[]
     */
    public function provides()
    {
        return [
            OfferImageRepositoryInterface::class,
        ];
    }
}
