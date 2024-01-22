<?php

namespace Creode\LaravelCareers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Creode\LaravelCareers\Commands\LaravelCareersCommand;

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
            ->hasViews()
            ->hasMigration('create_laravel-careers_table')
            ->hasCommand(LaravelCareersCommand::class);
    }
}
