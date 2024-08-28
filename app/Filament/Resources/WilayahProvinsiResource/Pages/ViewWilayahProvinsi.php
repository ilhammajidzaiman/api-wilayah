<?php

namespace App\Filament\Resources\WilayahProvinsiResource\Pages;

use App\Filament\Resources\WilayahProvinsiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewWilayahProvinsi extends ViewRecord
{
    protected static string $resource = WilayahProvinsiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
