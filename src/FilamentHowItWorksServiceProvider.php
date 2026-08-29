<?php

namespace JeffersonGoncalves\FilamentHowItWorks;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentHowItWorksServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-how-it-works';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile()
            ->hasTranslations();
    }
}
