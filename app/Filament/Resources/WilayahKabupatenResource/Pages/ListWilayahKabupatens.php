<?php

namespace App\Filament\Resources\WilayahKabupatenResource\Pages;

use App\Filament\Resources\WilayahKabupatenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWilayahKabupatens extends ListRecords
{
    protected static string $resource = WilayahKabupatenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
