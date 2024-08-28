<?php

namespace App\Filament\Resources\WilayahKecamatanResource\Pages;

use App\Filament\Resources\WilayahKecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWilayahKecamatans extends ListRecords
{
    protected static string $resource = WilayahKecamatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
