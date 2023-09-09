<?php

namespace Pratikkuikel\LaravelMultitenancyImpersonate;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Pratikkuikel\LaravelMultitenancyImpersonate\Commands\LaravelMultitenancyImpersonateCommand;

class LaravelMultitenancyImpersonateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-multitenancy-impersonate')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-multitenancy-impersonate_table')
            ->hasCommand(LaravelMultitenancyImpersonateCommand::class);
    }
}
