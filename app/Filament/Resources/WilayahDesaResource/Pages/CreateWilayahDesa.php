<?php

namespace App\Filament\Resources\WilayahDesaResource\Pages;

use App\Filament\Resources\WilayahDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWilayahDesa extends CreateRecord
{
    protected static string $resource = WilayahDesaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
