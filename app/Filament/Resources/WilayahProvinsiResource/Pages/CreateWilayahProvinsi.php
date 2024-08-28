<?php

namespace App\Filament\Resources\WilayahProvinsiResource\Pages;

use App\Filament\Resources\WilayahProvinsiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWilayahProvinsi extends CreateRecord
{
    protected static string $resource = WilayahProvinsiResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
