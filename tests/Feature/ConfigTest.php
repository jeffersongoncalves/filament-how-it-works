<?php

it('loads the filament-how-it-works config file', function () {
    expect(config('filament-how-it-works'))->toBeArray();
});

it('has a default navigation group', function () {
    expect(config('filament-how-it-works.navigation_group'))->toBe('How It Works');
});

it('registers the step resource in config', function () {
    expect(config('filament-how-it-works.resources'))->toBeArray()
        ->toHaveKey('step');
});
