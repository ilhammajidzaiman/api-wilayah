<?php

namespace App\Filament\Resources\WilayahKabupatenResource\Pages;

use App\Filament\Resources\WilayahKabupatenResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewWilayahKabupaten extends ViewRecord
{
    protected static string $resource = WilayahKabupatenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
