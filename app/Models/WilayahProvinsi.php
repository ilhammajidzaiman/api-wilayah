<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WilayahProvinsi extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
    [
        'kode',
        'nama',
    ];

    public function kabupatens(): HasMany
    {
        return $this->hasMany(MWilayahKabupaten::class, 'kode_provinsi');
    }
}
