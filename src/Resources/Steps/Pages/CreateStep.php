<?php

namespace JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\Pages;

use Filament\Resources\Pages\CreateRecord;
use JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\StepResource;
use JeffersonGoncalves\FilamentTranslatable\Actions\LocaleSwitcher;
use JeffersonGoncalves\FilamentTranslatable\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateStep extends CreateRecord
{
    use Translatable;

    protected static string $resource = StepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
        ];
    }
}
