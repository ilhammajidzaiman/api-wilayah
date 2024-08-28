<?php

namespace App\Filament\Resources\WilayahDesaResource\Pages;

use App\Filament\Resources\WilayahDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewWilayahDesa extends ViewRecord
{
    protected static string $resource = WilayahDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
