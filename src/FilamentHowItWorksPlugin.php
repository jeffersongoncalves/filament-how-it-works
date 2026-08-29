<?php

namespace JeffersonGoncalves\FilamentHowItWorks;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentHowItWorks\Concerns\HasHowItWorksPluginConfig;
use JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\StepResource;

class FilamentHowItWorksPlugin implements Plugin
{
    use HasHowItWorksPluginConfig;

    public function getId(): string
    {
        return 'filament-how-it-works';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'step' => StepResource::class,
        ]));
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
