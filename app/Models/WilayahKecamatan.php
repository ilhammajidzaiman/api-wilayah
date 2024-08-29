<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WilayahKecamatan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
    [
        'kode_kabupaten',
        'kode',
        'nama',
    ];

    public function kabupaten(): BelongsTo
    {
        return $this->belongsTo(WilayahKabupaten::class, 'kode_kabupaten', 'kode');
    }

    public function desas(): HasMany
    {
        return $this->hasMany(WilayahDesa::class, 'kode_kecamatan');
    }
}
