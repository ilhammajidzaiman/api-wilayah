<?php

namespace App\Filament\Resources\WilayahKecamatanResource\Pages;

use App\Filament\Resources\WilayahKecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWilayahKecamatan extends EditRecord
{
    protected static string $resource = WilayahKecamatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
