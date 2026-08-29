<?php

use JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\Pages\CreateStep;
use JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\Pages\EditStep;
use JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\Pages\ListSteps;
use JeffersonGoncalves\HowItWorks\Models\Step;
use Livewire\Livewire;

beforeEach(function () {
    filament()->setCurrentPanel(filament()->getPanel('admin'));
});

it('can render the step list page', function () {
    Livewire::test(ListSteps::class)->assertSuccessful();
});

it('can list steps in the table', function () {
    $step = Step::create([
        'icon' => 'heroicon-o-rocket-launch',
        'title' => 'Sign up',
        'description' => 'Create your free account.',
        'order' => 1,
        'is_active' => true,
    ]);

    Livewire::test(ListSteps::class)
        ->assertCanSeeTableRecords([$step]);
});

it('can create a step', function () {
    Livewire::test(CreateStep::class)
        ->fillForm([
            'icon' => 'heroicon-o-shopping-cart',
            'title' => 'Add to cart',
            'description' => 'Pick the items you want.',
            'order' => 2,
            'is_active' => true,
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Step::query()->where('order', 2)->exists())->toBeTrue();
});

it('can edit a step', function () {
    $step = Step::create([
        'icon' => 'heroicon-o-truck',
        'title' => 'Delivery',
        'description' => 'We ship within 24 hours.',
        'order' => 3,
        'is_active' => true,
    ]);

    Livewire::test(EditStep::class, ['record' => $step->getRouteKey()])
        ->assertSuccessful()
        ->fillForm(['description' => 'We ship within 12 hours.'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($step->refresh()->description)->toBe('We ship within 12 hours.');
});
