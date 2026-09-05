<div class="filament-hidden">

![Filament How It Works](https://raw.githubusercontent.com/jeffersongoncalves/filament-how-it-works/3.x/art/jeffersongoncalves-filament-how-it-works.png)

</div>

# Filament How It Works

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-support-FFDD00?style=flat-square&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/jeffersongoncalves)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-how-it-works.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-how-it-works)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-how-it-works/tests.yml?branch=3.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-how-it-works/actions?query=workflow%3Atests+branch%3A3.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-how-it-works/pint.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-how-it-works/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-how-it-works.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-how-it-works)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-how-it-works.svg?style=flat-square)](LICENSE)

Filament admin UI (CRUD) for [`jeffersongoncalves/laravel-how-it-works`](https://github.com/jeffersongoncalves/laravel-how-it-works) — manage "how it works" steps, with translatable title/description fields, inside a [Filament](https://filamentphp.com) panel.

## Compatibility

| Package Version | Filament Version |
|-----------------|-------------------|
| [1.x](https://github.com/jeffersongoncalves/filament-how-it-works/tree/1.x) | 3.x |
| [2.x](https://github.com/jeffersongoncalves/filament-how-it-works/tree/2.x) | 4.x |
| [3.x](https://github.com/jeffersongoncalves/filament-how-it-works/tree/3.x) | 5.x |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-how-it-works:"^3.0"
```

Register the plugin in your panel provider:

```php
use JeffersonGoncalves\FilamentHowItWorks\FilamentHowItWorksPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FilamentHowItWorksPlugin::make(),
        ]);
}
```

The Steps resource renders translatable fields (`title`, `description`), so a [`jeffersongoncalves/filament-translatable`](https://github.com/jeffersongoncalves/filament-translatable) plugin instance must also be registered in the same panel.

## Configuration

Publish the config file:

```bash
php artisan vendor:publish --tag="filament-how-it-works-config"
```

```php
return [
    'navigation_group' => 'How It Works',

    'resources' => [
        'step' => \JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\StepResource::class,
    ],
];
```

Or configure fluently:

```php
FilamentHowItWorksPlugin::make()->navigationGroup('Homepage');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
