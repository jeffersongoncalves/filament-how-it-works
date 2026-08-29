---
name: filament-how-it-works-development
description: Build and work with Filament How It Works features, including the Step resource and panel configuration.
---

# Filament How It Works Development

## When to use this skill

Use this skill when:
- Integrating Filament How It Works into a panel
- Customizing the Step resource
- Overriding the resource class via config

## Configuration

### Basic Setup

```php
use JeffersonGoncalves\FilamentHowItWorks\FilamentHowItWorksPlugin;

FilamentHowItWorksPlugin::make()
    ->navigationGroup('Homepage');
```

### Overriding the Resource

```php
// config/filament-how-it-works.php
return [
    'resources' => [
        'step' => \App\Filament\Resources\Steps\CustomStepResource::class,
    ],
];
```

## Resources

### StepResource

Model: `JeffersonGoncalves\HowItWorks\Models\Step`. Fields: `icon` (heroicon name), `title` (translatable), `description` (translatable), `order`, `is_active`. The table supports drag-to-reorder via `->reorderable('order')`.

## Troubleshooting

### Plugin not registered

**Cause**: Plugin not added to PanelProvider.

**Solution**: Add `FilamentHowItWorksPlugin::make()` to the `plugins()` array in your PanelProvider.

### Locale switcher missing on Create/Edit/List pages

**Cause**: `FilamentTranslatablePlugin` not registered in the same panel.

**Solution**: Add `FilamentTranslatablePlugin::make()` alongside `FilamentHowItWorksPlugin::make()` in the panel's `plugins()` array.
