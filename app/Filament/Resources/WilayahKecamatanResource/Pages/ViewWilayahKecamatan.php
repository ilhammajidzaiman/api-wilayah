<?php

namespace App\Filament\Resources\WilayahKecamatanResource\Pages;

use App\Filament\Resources\WilayahKecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewWilayahKecamatan extends ViewRecord
{
    protected static string $resource = WilayahKecamatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
