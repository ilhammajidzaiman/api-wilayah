<?php

namespace App\Filament\Resources\WilayahProvinsiResource\Pages;

use App\Filament\Resources\WilayahProvinsiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWilayahProvinsi extends EditRecord
{
    protected static string $resource = WilayahProvinsiResource::class;

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
