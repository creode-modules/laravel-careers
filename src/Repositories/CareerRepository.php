<?php

namespace Creode\LaravelCareers\Repositories;

use Creode\LaravelRepository\BaseRepository;

class CareerRepository extends BaseRepository
{
    /**
     * {@inheritdoc}
     */
    protected function getModel(): string {
        return config('careers.model');
    }
}
