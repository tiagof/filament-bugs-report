<?php

namespace App\Filament\Resources\MyModelResource\Pages;

use App\Filament\Resources\MyModelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMyModel extends EditRecord
{
    protected static string $resource = MyModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
