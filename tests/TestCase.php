<?php

namespace Pratikkuikel\LaravelMultitenancyImpersonate\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Pratikkuikel\LaravelMultitenancyImpersonate\LaravelMultitenancyImpersonateServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Pratikkuikel\\LaravelMultitenancyImpersonate\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelMultitenancyImpersonateServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-multitenancy-impersonate_table.php.stub';
        $migration->up();
        */
    }
}
