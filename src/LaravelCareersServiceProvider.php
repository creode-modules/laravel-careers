<?php

namespace Creode\LaravelCareers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasMigration('create_careers_table')
            ->runsMigrations();
    }
}
