<?php

namespace App\Providers\UseCases;

use App\UseCases\Interfaces\OfferPersistUseCaseInterface;
use App\UseCases\OfferPersistUseCase;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class OfferPersistUseCaseProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(OfferPersistUseCaseInterface::class, OfferPersistUseCase::class);
    }

    /**
     * @return string[]
     */
    public function provides()
    {
        return [
            OfferPersistUseCaseInterface::class,
        ];
    }
}
