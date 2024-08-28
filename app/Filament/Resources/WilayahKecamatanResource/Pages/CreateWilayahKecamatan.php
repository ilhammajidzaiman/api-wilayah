<?php

namespace App\Filament\Resources\WilayahKecamatanResource\Pages;

use App\Filament\Resources\WilayahKecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWilayahKecamatan extends CreateRecord
{
    protected static string $resource = WilayahKecamatanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
