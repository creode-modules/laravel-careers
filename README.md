# Laravel Careers

[![Latest Version on Packagist](https://img.shields.io/packagist/v/creode/laravel-careers.svg?style=flat-square)](https://packagist.org/packages/creode/laravel-careers)
[![Total Downloads](https://img.shields.io/packagist/dt/creode/laravel-careers.svg?style=flat-square)](https://packagist.org/packages/creode/laravel-careers)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require creode/laravel-careers
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="careers-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="careers-config"
```

This is the contents of the published config file:

```php
// config for Creode/LaravelCareers
return [
    'model' => \Creode\LaravelCareers\Models\Career::class,
];
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Creode](https://github.com/creode)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
