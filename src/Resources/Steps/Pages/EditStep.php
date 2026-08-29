<?php

namespace JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\StepResource;
use JeffersonGoncalves\FilamentTranslatable\Actions\LocaleSwitcher;
use JeffersonGoncalves\FilamentTranslatable\Resources\Pages\EditRecord\Concerns\Translatable;

class EditStep extends EditRecord
{
    use Translatable;

    protected static string $resource = StepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
