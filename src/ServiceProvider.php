<?php

declare(strict_types=1);

namespace Zairakai\{{PACKAGE_NAME}};

use Illuminate\Support\ServiceProvider;

class {{PACKAGE_NAME}}ServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/{{PACKAGE_SLUG}}.php', '{{PACKAGE_SLUG}}');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/{{PACKAGE_SLUG}}.php' => config_path('{{PACKAGE_SLUG}}.php'),
            ], 'zairakai-config');
        }
    }
}
