<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WilayahDesa extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
    [
        'kode_kecamatan',
        'kode',
        'nama',
    ];

    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(MWilayahKecamatan::class, 'kode_kecamatan', 'kode');
    }
}
