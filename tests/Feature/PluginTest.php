<?php

use JeffersonGoncalves\FilamentHowItWorks\FilamentHowItWorksPlugin;
use JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\StepResource;

it('has a valid plugin id', function () {
    expect(FilamentHowItWorksPlugin::make()->getId())->toBe('filament-how-it-works');
});

it('resolves to the same instance registered in the panel', function () {
    expect(FilamentHowItWorksPlugin::get())->toBeInstanceOf(FilamentHowItWorksPlugin::class);
});

it('registers the step resource in the panel', function () {
    $panel = filament()->getPanel('admin');

    expect($panel->getResources())->toContain(StepResource::class);
});

it('falls back to the default navigation group', function () {
    expect(FilamentHowItWorksPlugin::make()->getNavigationGroup())->toBe('How It Works');
});

it('allows overriding the navigation group fluently', function () {
    expect(FilamentHowItWorksPlugin::make()->navigationGroup('Homepage')->getNavigationGroup())->toBe('Homepage');
});
