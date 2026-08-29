<?php

namespace JeffersonGoncalves\FilamentHowItWorks\Resources\Steps\Tables;

use Filament\Tables\Actions;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class StepsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('icon')
                    ->label(__('filament-how-it-works::how-it-works.item.fields.icon'))
                    ->icon(fn (?string $state): ?string => $state),
                TextColumn::make('title')
                    ->label(__('filament-how-it-works::how-it-works.item.fields.title'))
                    ->searchable()
                    ->limit(60),
                TextColumn::make('order')
                    ->label(__('filament-how-it-works::how-it-works.item.fields.order'))
                    ->sortable(),
                ToggleColumn::make('is_active')
                    ->label(__('filament-how-it-works::how-it-works.item.fields.is_active')),
            ])
            ->defaultSort('order')
            ->reorderable('order')
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
