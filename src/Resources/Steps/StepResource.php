<?php

namespace JeffersonGoncalves\FilamentHowItWorks\Resources\Steps;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use JeffersonGoncalves\FilamentHowItWorks\FilamentHowItWorksPlugin;
use JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\Pages\CreateStep;
use JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\Pages\EditStep;
use JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\Pages\ListSteps;
use JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\Schemas\StepForm;
use JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\Tables\StepsTable;
use JeffersonGoncalves\FilamentTranslatable\Resources\Concerns\Translatable;
use JeffersonGoncalves\HowItWorks\Models\Step;
use Throwable;

class StepResource extends Resource
{
    use Translatable;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    protected static ?string $recordTitleAttribute = 'title';

    public static function getModel(): string
    {
        return Step::class;
    }

    public static function getNavigationGroup(): ?string
    {
        try {
            return FilamentHowItWorksPlugin::get()->getNavigationGroup();
        } catch (Throwable) {
            return config('filament-how-it-works.navigation_group', __('filament-how-it-works::how-it-works.navigation_group'));
        }
    }

    public static function getModelLabel(): string
    {
        return __('filament-how-it-works::how-it-works.item.label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament-how-it-works::how-it-works.item.plural_label');
    }

    public static function form(Form $form): Form
    {
        return StepForm::configure($form);
    }

    public static function table(Table $table): Table
    {
        return StepsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSteps::route('/'),
            'create' => CreateStep::route('/create'),
            'edit' => EditStep::route('/{record}/edit'),
        ];
    }
}
