<?php

namespace Creode\LaravelCareers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Creode\LaravelCareers\LaravelCareers
 */
class LaravelCareers extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Creode\LaravelCareers\LaravelCareers::class;
    }
}
