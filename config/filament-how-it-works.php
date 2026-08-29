<?php

use JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\StepResource;

return [

    /*
    |--------------------------------------------------------------------------
    | Navigation Group
    |--------------------------------------------------------------------------
    |
    | The navigation group under which the How It Works resource is listed in
    | the Filament panel. Override per-plugin with ->navigationGroup('...').
    |
    */

    'navigation_group' => 'How It Works',

    /*
    |--------------------------------------------------------------------------
    | Resources
    |--------------------------------------------------------------------------
    |
    | The Filament resource classes registered by the plugin. Each entry can be
    | swapped for a custom resource extending the default one.
    |
    */

    'resources' => [
        'step' => StepResource::class,
    ],

];
