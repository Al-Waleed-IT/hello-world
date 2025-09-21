<?php

namespace Genforge\HelloWorld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Example: publish a config file
        $this->publishes([
            __DIR__ . '/../config/hello-world.php' => config_path('hello-world.php'),
        ], 'config');

        // Example: load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Example: load views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'hello-world');
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Merge config
        $this->mergeConfigFrom(
            __DIR__ . '/../config/hello-world.php',
            'hello-world'
        );
    }
}
