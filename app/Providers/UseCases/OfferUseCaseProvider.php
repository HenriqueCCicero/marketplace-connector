<?php

namespace App\Providers\UseCases;

use App\UseCases\Interfaces\OfferUseCaseInterface;
use App\UseCases\OfferUseCase;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class OfferUseCaseProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(OfferUseCaseInterface::class, OfferUseCase::class);
    }

    /**
     * @return string[]
     */
    public function provides()
    {
        return [
            OfferUseCaseInterface::class,
        ];
    }
}
