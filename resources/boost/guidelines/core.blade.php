## Filament How It Works

Admin UI (CRUD) for [`jeffersongoncalves/laravel-how-it-works`](https://github.com/jeffersongoncalves/laravel-how-it-works) inside a Filament panel. Adds a single resource — Steps — with translatable `title`/`description` fields (via `jeffersongoncalves/filament-translatable`).

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-how-it-works
</code-snippet>
@endverbatim

### Configuration in the Panel

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\FilamentHowItWorks\FilamentHowItWorksPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FilamentHowItWorksPlugin::make()
                ->navigationGroup('How It Works'),
        ]);
}
</code-snippet>
@endverbatim

### Resources

- **StepResource** — manages `JeffersonGoncalves\HowItWorks\Models\Step` (icon, title, description, order, active). Supports drag-to-reorder via the `order` column.

The resource honors the `filament-how-it-works.resources.step` config override, so a custom resource class can be swapped in without republishing the plugin.

### Best Practices

- Requires a `FilamentTranslatablePlugin` registered in the same panel (translatable fields rely on it for locale switching).
- Customize the navigation group globally via `config('filament-how-it-works.navigation_group')` or per-plugin via `->navigationGroup()`.
- Override the resource via `config('filament-how-it-works.resources.step')` without touching the plugin's `register()` method.
