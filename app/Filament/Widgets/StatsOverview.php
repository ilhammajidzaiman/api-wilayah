<?php

namespace App\Filament\Widgets;

use App\Models\WilayahDesa;
use App\Models\WilayahKabupaten;
use App\Models\WilayahKecamatan;
use App\Models\WilayahProvinsi;
use Filament\Widgets\StatsOverviewWidget\Stat;
use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    use HasWidgetShield;

    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Provinsi', WilayahProvinsi::all()->count())
                ->chart([3, 4, 10, 7, 8, 1, 6])
                ->color('primary'),
            Stat::make('Kabupaten', WilayahKabupaten::all()->count())
                ->chart([7, 2, 10, 3, 8, 5, 9])
                ->color('success'),
            Stat::make('Kecamatan', WilayahKecamatan::all()->count())
                ->chart([3, 4, 10, 7, 8, 1, 6])
                ->color('warning'),
            Stat::make('Desa', WilayahDesa::all()->count())
                ->chart([3, 4, 10, 7, 8, 1, 6])
                ->color('info'),
        ];
    }
}
