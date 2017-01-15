<?php

namespace Jrdn\DoApiWrapper\Laravel\Providers;

use Illuminate\Support\ServiceProvider;
use Jrdn\DoApiWrapper\Infrastructure\Services\Database\DatabaseClient;
use Jrdn\DoApiWrapper\Infrastructure\Services\Database\MySqlClient;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DatabaseClient::class, MySqlClient::class);
    }
}
