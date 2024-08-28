<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\WilayahDesa;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WilayahDesaResource\Pages;
use App\Filament\Resources\WilayahDesaResource\RelationManagers;

class WilayahDesaResource extends Resource
{
    protected static ?string $model = WilayahDesa::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Wilayah';
    protected static ?string $modelLabel = 'Desa';
    protected static ?string $navigationLabel = 'Desa';
    protected static ?string $slug = 'desa';
    protected static ?string $recordTitleAttribute = 'nama';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Select::make('kode_kecamatan')
                            ->label('Kode Kecamatan')
                            ->required()
                            ->preload()
                            ->forceSearchCaseInsensitive()
                            ->searchable('kode', 'nama')
                            ->relationship(
                                name: 'kecamatan',
                                titleAttribute: 'nama',
                                modifyQueryUsing: fn(Builder $query) => $query
                                    ->orderBy('kode')
                            )
                            ->getOptionLabelFromRecordUsing(fn(Model $record) => "$record->kode - {$record->nama}"),
                        TextInput::make('kode')
                            ->label('Kode')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('nama')
                            ->label('Nama')
                            ->required()
                            ->maxLength(255),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('kode', 'asc')
            ->columns([
                TextColumn::make('index')
                    ->label('No')
                    ->rowIndex(isFromZero: false),
                TextColumn::make('kode_kecamatan')
                    ->label('Kode Kecamatan')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('kode')
                    ->label('Kode')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->toggleable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make()->color('secondary'),
                    Tables\Actions\EditAction::make()->color('success'),
                    Tables\Actions\DeleteAction::make()->color('danger'),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWilayahDesas::route('/'),
            'create' => Pages\CreateWilayahDesa::route('/create'),
            'view' => Pages\ViewWilayahDesa::route('/{record}'),
            'edit' => Pages\EditWilayahDesa::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
