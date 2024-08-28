<?php

namespace App\Filament\Resources\WilayahKabupatenResource\Pages;

use App\Filament\Resources\WilayahKabupatenResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWilayahKabupaten extends CreateRecord
{
    protected static string $resource = WilayahKabupatenResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
