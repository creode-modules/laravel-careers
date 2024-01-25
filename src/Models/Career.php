<?php

namespace Creode\LaravelCareers\Models;

use Illuminate\Database\Eloquent\Model;
use PawelMysior\Publishable\Publishable;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Creode\LaravelCareers\Database\Factories\CareerFactory;

class Career extends Model
{
    use HasFactory, Publishable;

    /**
     * {@inheritdoc}
     */
    protected $table = 'careers';

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return CareerFactory::new();
    }
}
