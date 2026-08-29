<?php

namespace JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;

class StepForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('filament-how-it-works::how-it-works.item.label'))
                    ->schema([
                        TextInput::make('icon')
                            ->label(__('filament-how-it-works::how-it-works.item.fields.icon'))
                            ->placeholder('heroicon-o-rocket-launch')
                            ->maxLength(255)
                            ->columnSpanFull(),
                        TextInput::make('title')
                            ->label(__('filament-how-it-works::how-it-works.item.fields.title'))
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Textarea::make('description')
                            ->label(__('filament-how-it-works::how-it-works.item.fields.description'))
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),
                        TextInput::make('order')
                            ->label(__('filament-how-it-works::how-it-works.item.fields.order'))
                            ->numeric()
                            ->default(0),
                        Toggle::make('is_active')
                            ->label(__('filament-how-it-works::how-it-works.item.fields.is_active'))
                            ->default(true),
                    ])->columns(2),
            ]);
    }
}
