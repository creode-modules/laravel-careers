<?php

namespace Creode\LaravelCareers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Creode\LaravelCareers\Providers\RouteServiceProvider;

class LaravelCareersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-careers')
            ->hasConfigFile()
            ->hasViews('careers')
            ->hasMigration('create_careers_table')
            ->runsMigrations();
    }

    public function register()
    {
        parent::register();

        $this->app->register(RouteServiceProvider::class);
    }
}
