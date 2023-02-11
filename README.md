# Laravel commands history
A simple Laravel package to store every artisan command history with arguments and options in database.

<a href="https://packagist.org/packages/haroon-mahmood-4276/laravel-commands-history"><img src="https://img.shields.io/packagist/v/haroon-mahmood-4276/laravel-commands-history?color=green" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/haroon-mahmood-4276/laravel-commands-history"><img src="https://img.shields.io/github/downloads/haroon-mahmood-4276/laravel-commands-history/total" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/haroon-mahmood-4276/laravel-commands-history"><img src="https://img.shields.io/github/license/haroon-mahmood-4276/laravel-commands-history?color=teal" alt="License"></a>
<a href="https://packagist.org/packages/haroon-mahmood-4276/laravel-commands-history"><img src="https://img.shields.io/packagist/stars/haroon-mahmood-4276/laravel-commands-history?color=red" alt="Stars"></a>
<a href="https://packagist.org/packages/haroon-mahmood-4276/laravel-commands-history"><img src="https://img.shields.io/badge/php-%3E%3D8.0-orange" alt="PHP Version"></a>

## Prerequisite
- php: >= 8.0
- laravel/framework: >= 9.x

## Installation
```shell
composer require haroon-mahmood-4276/laravel-commands-history
```

Laravel uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

If laravel's auto-discovery doesn't work, add following lines in ```providers``` array in ```config/app.php```
```shell
/*
* Package Service Providers...
*/
...

HaroonMahmood4276\LaravelCommandsHistory\CommandHistoryServiceProvider::class,
HaroonMahmood4276\LaravelCommandsHistory\CommandEventServiceProvider::class,
...
```

## Migration
```shell
php artisan migrate
```

## Want to contribute
- Fork this repo.
- Contribute in it.
- Open a pull request.

## Security Vulnerabilities
If you discover a security vulnerability within package, please send an e-mail to Haroon Mahmood via haroon.mahmood.4276@gmail.com. All security vulnerabilities will be promptly addressed.

## License
This package is open-sourced software licensed under the [MIT license](https://github.com/haroon-mahmood-4276/laravel-commands-history/blob/v1.0.0/LICENSE).
