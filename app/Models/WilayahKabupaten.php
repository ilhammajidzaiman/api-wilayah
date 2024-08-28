<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WilayahKabupaten extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
    [
        'kode_provinsi',
        'kode',
        'nama',
    ];

    public function provinsi(): BelongsTo
    {
        return $this->belongsTo(MWilayahProvinsi::class, 'kode_provinsi', 'kode');
    }

    public function kecamatans(): HasMany
    {
        return $this->hasMany(MWilayahKecamatan::class, 'kode_kabupaten');
    }
}
