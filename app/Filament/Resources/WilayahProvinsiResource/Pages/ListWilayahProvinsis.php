<?php

namespace App\Filament\Resources\WilayahProvinsiResource\Pages;

use App\Filament\Resources\WilayahProvinsiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWilayahProvinsis extends ListRecords
{
    protected static string $resource = WilayahProvinsiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
