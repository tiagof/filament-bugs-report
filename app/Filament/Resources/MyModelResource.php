<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MyModelResource\Pages;
use App\Filament\Resources\MyModelResource\RelationManagers;
use App\Models\MyModel;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Component;

class MyModelResource extends Resource
{
    protected static ?string $model = MyModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->formatStateUsing(fn(string $state, Component $livewire) => $state . '-' . $livewire->activeTab)
            ])
            ->filters([
                Tables\Filters\Filter::make('always_visible'),
                Tables\Filters\Filter::make('only on tab "A"')
                    ->visible(fn(Component $livewire): bool => $livewire->activeTab === 'A'),
            ], layout: Tables\Enums\FiltersLayout::AboveContent)
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMyModels::route('/'),
            'create' => Pages\CreateMyModel::route('/create'),
            'edit' => Pages\EditMyModel::route('/{record}/edit'),
        ];
    }
}
