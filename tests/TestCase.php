<?php

declare(strict_types=1);

namespace Zairakai\{{PACKAGE_NAME}}\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Zairakai\{{PACKAGE_NAME}}\{{PACKAGE_NAME}}ServiceProvider;

abstract class TestCase extends Orchestra
{
    /**
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            {{PACKAGE_NAME}}ServiceProvider::class,
        ];
    }
}
