<?php

namespace Billyranario\ProstarterKit;

use Illuminate\Support\ServiceProvider;

class ProstarterKitServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // You can publish configuration files, views, assets etc.
        // For example, if you have a config file named 'prostarter-kit.php' in your package,
        // you can let users publish it to their own app's config directory like so:
        // $this->publishes([
        //     __DIR__.'/path/to/config/prostarter-kit.php' => config_path('prostarter-kit.php'),
        // ], 'config');
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        // You can register any bindings or singleton instances here.
        // For example:
        // $this->app->singleton(SomeService::class, function ($app) {
        //    return new SomeService();
        // });
    }
}
