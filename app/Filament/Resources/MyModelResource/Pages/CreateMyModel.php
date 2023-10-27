<?php

namespace App\Filament\Resources\MyModelResource\Pages;

use App\Filament\Resources\MyModelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMyModel extends CreateRecord
{
    protected static string $resource = MyModelResource::class;
}
