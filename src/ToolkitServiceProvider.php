<?php

namespace SparkLaravel\Toolkit;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SparkLaravel\Toolkit\Commands\ToolkitCommand;

class ToolkitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('toolkit')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_toolkit_table')
            ->hasCommand(ToolkitCommand::class);
    }
}
