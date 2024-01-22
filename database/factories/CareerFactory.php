<?php

namespace Creode\LaravelCareers\Database\Factories;

use Creode\LaravelCareers\Models\Career;
use Symfony\Polyfill\Intl\Icu\Currencies;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @template TModel of \Creode\Models\Career
 *
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<TModel>
 */
class CareerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<TModel>
     */
    protected $model = Career::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'meta_description' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'location' => $this->faker->city(),
            'salary' => Currencies::getSymbol($this->faker->currencyCode()) . $this->faker->numberBetween(18000, 50000),
            'type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract']),
            'duration' => $this->faker->randomElement(['Permanent', 'Temporary', 'Fixed Term']),
            'description' => $this->faker->paragraphs(3, true),
            'application_email' => $this->faker->safeEmail(),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
