<?php

namespace App\Filament\Resources\WilayahDesaResource\Pages;

use App\Filament\Resources\WilayahDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWilayahDesa extends EditRecord
{
    protected static string $resource = WilayahDesaResource::class;

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
