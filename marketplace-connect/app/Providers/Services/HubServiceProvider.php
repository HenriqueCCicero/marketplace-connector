<?php

namespace App\Providers\Services;

use App\Services\HubService;
use App\Services\Interfaces\HubServiceInterface;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class HubServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(HubServiceInterface::class, HubService::class);
    }

    /**
     * @return string[]
     */
    public function provides()
    {
        return [
            HubServiceInterface::class,
        ];
    }
}
