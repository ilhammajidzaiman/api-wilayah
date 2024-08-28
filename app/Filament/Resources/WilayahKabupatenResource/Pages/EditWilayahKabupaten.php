<?php

namespace App\Filament\Resources\WilayahKabupatenResource\Pages;

use App\Filament\Resources\WilayahKabupatenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWilayahKabupaten extends EditRecord
{
    protected static string $resource = WilayahKabupatenResource::class;

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
