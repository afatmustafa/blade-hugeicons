<?php

declare(strict_types=1);

namespace Afatmustafa\HugeIcons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeHugeIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-hugeicons', []);

            $factory->add('hugeicons', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-hugeicons.php', 'blade-hugeicons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-hugeicons'),
            ], 'blade-hugeicons');

            $this->publishes([
                __DIR__.'/../config/blade-hugeicons.php' => $this->app->configPath('blade-hugeicons.php'),
            ], 'blade-hugeicons-config');
        }
    }
}
