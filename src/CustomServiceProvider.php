<?php

declare(strict_types=1);

namespace My\CustomPackageExample;

use Illuminate\Foundation\Application;
use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;
use Override;

class MyCustomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
    }

    /**
     * Register the application services.
     */
    #[Override]
    public function register(): void
    {
        Carbon::macro('myTestMacro', static function (string $string): string {
            return $string;
        });
    }
}
