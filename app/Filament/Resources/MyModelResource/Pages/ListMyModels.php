<?php

namespace App\Filament\Resources\MyModelResource\Pages;

use App\Filament\Resources\MyModelResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListMyModels extends ListRecords
{
    protected static string $resource = MyModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'A' => Tab::make('a')->modifyQueryUsing(fn (Builder $query) => $query),
            'B' => Tab::make('b')->modifyQueryUsing(fn (Builder $query) => $query),
        ];
    }
}
