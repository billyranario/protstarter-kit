<?php

namespace Billyranario\ProstarterKit\Providers;

use Illuminate\Support\ServiceProvider;

class ProstarterKitServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // You can publish configuration files, views, assets etc.
        $this->publishes([
            __DIR__.'/../Config/prostarter-kit.php' => config_path('prostarter-kit.php'),
        ], 'config');
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register(): void
    {
        // You can register any bindings or singleton instances here.
        // For example:
        // $this->app->singleton(SomeService::class, function ($app) {
        //    return new SomeService();
        // });
    }
}
