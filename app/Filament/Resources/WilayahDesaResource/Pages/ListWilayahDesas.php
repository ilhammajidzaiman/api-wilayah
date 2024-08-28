<?php

namespace App\Filament\Resources\WilayahDesaResource\Pages;

use App\Filament\Resources\WilayahDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWilayahDesas extends ListRecords
{
    protected static string $resource = WilayahDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
